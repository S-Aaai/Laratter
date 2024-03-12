<?php
use Carbon\Carbon;
// usersテーブルのchild_birthdayカラムの情報を、tweetsテーブルのuser_idに繋げる

    function calculateAge($childBirthday, $tweetedAt)
    {
        $childBirthday = new Carbon($childBirthday);
        $tweetedAt = new Carbon('now');

        $diff = $childBirthday->diffInMonths($tweetedAt);     //差分の月数がわかる
        $year = floor($diff /12);                             //12切捨てで年齢がわかる
        $month = $diff %12;                                   //12で割った余りで月齢がわかる

        return "$year 歳 $month ヶ月";
    }
