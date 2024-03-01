<?php

namespace App\Services;

use App\Models\Tweet;
use App\Models\TweetUser;

class TweetService
{
    public function createTweet($data, $user)
    {
        return $user->tweets()->create($data);
    }

    public function allTweets()
    {
        return Tweet::with('user')->latest()->get();

    }

    public function likedTweets()
    {
        return TweetUser::with('user')->where('id', '=', 13)->latest()->get();
    }


    public function updateTweet(Tweet $tweet, $data)
    {
        $tweet->update($data);
        return $tweet;
    }

    public function deleteTweet(Tweet $tweet)
    {
        return $tweet->delete();
    }
}

