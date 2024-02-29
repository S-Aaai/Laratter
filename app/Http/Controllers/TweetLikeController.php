<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Models\TweetUser;
use Illuminate\Support\Facades\DB;
use App\Services\TweetService;

class TweetLikeController extends Controller
{
    protected $tweetService;

    public function __construct(TweetService $tweetService)
    {
        $this->tweetService = $tweetService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Tweet::class);

        // ログインユーザーがいいねしたツイートのtweet_idを取得
        $likedTweetIds = DB::table('tweet_user')
            ->where('user_id', auth()->user()->id)
            ->pluck('tweet_id');

        // いいねしたツイートのみを取得
        $tweets = Tweet::whereIn('id', $likedTweetIds)->get();

        return view('tweets.index', compact('tweets'));

        
        // $this->authorize('viewAny', Tweet::class);

        // $tweetLikes = TweetUser::with('user')->where('id', '=', 13)->latest()->get();
        // return view('tweetLikes.index', compact('tweetLikes'));


        // $this->authorize('viewAny', TweetUser::class);
        // $tweetLiked = TweetUser::with('user')->where('id', '=', 13)->latest()->get();

        // // $tweetLiked = $this->tweetService->likedTweets();
        // return view('tweets_liked.index', compact('tweetLiked'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Tweet $tweet)
    {
        $tweet->liked()->attach(auth()->id());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Tweet $tweet)
    {
        $this->authorize('view', $tweet);
        return view('tweets.show', compact('tweet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tweet $tweet)
    {
        $tweet->liked()->detach(auth()->id());
        return back();
    }
}
