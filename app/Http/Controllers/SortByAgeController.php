<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SortByAgeController extends Controller
{
    public function filterTweetsByAge(Request $request)
    {
        // 選択した月齢を取得
        $selectedAge = $request->input('selected_age');

        // 選択した月齢に合致する投稿を取得
        $tweets = User::find(auth()->user()->id)
            ->tweets()
            ->whereRaw("TIMESTAMPDIFF(MONTH, child_birthday, NOW()) BETWEEN ? AND ?", [$selectedAge * 3 - 2, $selectedAge * 3])
            ->get();

        // 各ツイートの月齢を計算してデータに追加
        foreach ($tweets as $tweet) {
            $tweet->child_age_months = calculateAge($tweet->user->child_birthday, $tweet->created_at);
        }

        $user = Auth::user();

        return view('sortByAge.index', compact('tweets', 'user'));
    }

    public function index(Request $request)
    {
        $selectedAge = $request->input('selected_age');

        //child_birthday取得
        $childBirthday = Auth::user()->child_birthday;

        //選択された月齢に基づきツイートをフィルタリングするクエリ
        $filteredTweets = Tweet::where('created_at', '>=', $childBirthday)->get();

        return view('tweets.index',['tweets' => $filteredTweets]);
    }
}
