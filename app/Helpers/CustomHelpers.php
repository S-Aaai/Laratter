<?php
use Carbon\Carbon;

    function calculateAge($childBirthday, $tweetedAt)
    {
        $childBirthday = new Carbon($childBirthday);
        $tweetedAt = new Carbon($tweetedAt);

        $diff = $childBirthday->diff($tweetedAt);     //差分の月数がわかる
        $year = floor($diff->y * 12);
        $month = $diff->y % 12;

        $diff_months = $year + $month -1;

        return $diff_months;
        //branch test
    }
