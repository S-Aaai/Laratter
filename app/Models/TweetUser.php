<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TweetUser extends Model
{
    use HasFactory;
    public function likedTweet()
    {
        return $this->belongsToMany(TweetUser::class)->withTimestamps();
    }

}
