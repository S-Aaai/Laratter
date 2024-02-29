<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Tweet;
use App\Models\TweetUser;
use Illuminate\Support\Facades\Auth;


class MyPostController extends Controller
{
    public function index()
    {
        $tweets=Tweet::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->get();
        $user = Auth::user();

        return view('myposts.index', compact('tweets', 'user')); // view('ルート名',compact(変数名)) 標示画面に変数受け渡し
    }

}
