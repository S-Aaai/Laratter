<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Services\TweetService;

class SortByAgeController extends Controller
{
    public function filterTweetsByAge(Request $request)
    {
        // bladeファイルフォームで選択した月齢を取得
        $selectedAge = $request->input('selected_age');

        // 選択した月齢に合致する投稿を取得
        $tweets = Tweet::where('child_age_in_months', $selectedAge)
            ->latest('created_at')
            ->get();

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
