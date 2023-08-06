<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function lengthOfLIS($nums)
    {
//        $numLength = count($nums);
//        // $dp = new SplFixedArray($numLength);
//        $dp = array_fill(0, $numLength - 1, 1);
//        $ans = 1;
//        if ($numLength == 1) return $ans;
//
//        for ($i = $numLength - 1; $i >= 0; $i -= 1) {
//            $localLen = 0;
//            for ($j = $i + 1; $j < $numLength; $j += 1) {
//                if ($dp[$j] != 0 and $nums[$i] < $nums[$j]) {
//                    $localLen = max($localLen, $dp[$j]);
//                }
//            }
//            $dp[$i] = $localLen + 1;
//            $ans = max($ans, $dp[$i]);
//        }
//
//        return $ans;

        $result = 1;
        for ($i = count($nums) - 1; $i >= 0; $i--) {
            if (!isset($tem[$i])) {
                $tem[$i] = 1;
            }
            $max = 0;
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$j] > $nums[$i]) {
                    $max = max($max, $tem[$j]);
                }
            }
            $tem[$i] = $max + 1;
            $result = max($result, $tem[$i]);
        }

        return $result;
    }
}

$a = new Solution();
var_dump($a->lengthOfLIS(
    [100, 10, 22, 44, 33, 21, 50, 41, 60, 80, 55]
));