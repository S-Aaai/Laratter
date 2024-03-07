<?php
use DateTime;

if (!function_exists("calculateAge")) {
    function calculateAge($childBirthday, $tweetCreatedAt)
    {
        $childBirthday = new DateTime($childBirthday);
        $tweetCreatedAt = new DateTime($tweetCreatedAt);
        $interval = $childBirthday->diff($tweetCreatedAt);

        // echo  $interval->y . "年: " . $interval->m . "ヶ月: ";

        return $interval->y * 12 + $interval->m;
    }
}
