<?php
use Carbon\Carbon;

    function calculateAge($childBirthday, $tweetedAt)
    {
        $childBirthday = new Carbon($childBirthday);
        $tweetedAt = new Carbon($tweetedAt);

        $diff = $childBirthday->diff($tweetedAt);     //差分の月数がわかる
        $year = floor($diff->y * 12);
        $month = $diff->m % 12;

        // dd($childBirthday);
        // dd($tweetedAt);
        // dd($diff);
        // dd($year);
        // dd($month);

        //-1を消した
        $diff_months = $year + $month ;
        // dd($diff_months);

        return $diff_months;

    }
