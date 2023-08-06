<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
//        $tem = [];
//        $max = 0;
//        $start = 0;
//        for ($i = 0; $i < strlen($s); $i++) {
//            if (!isset($tem[$s[$i]])) {
//                $count = $i - $start + 1;
//                $max = max($max, $count);
//            } else {
//                $start = $tem[$s[$i]] + 1;
//            }
//            $tem[$s[$i]] = $i;
//        }
//
//        return $max;

        $temp = [];
        $max = 0;
        $start = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if (isset($temp[$s[$i]])) {
                $start = max($temp[$s[$i]] + 1, $start);
            }
            $max = max($max, $i - $start + 1);

            $temp[$s[$i]] = $i;
        }

        return $max;
    }
}

$a = new Solution();
var_dump($a->lengthOfLongestSubstring(
    "tmmzutxa"
));