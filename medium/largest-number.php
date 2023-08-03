<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return String
     */
    function largestNumber($nums)
    {
        $nums = array_map('strval', $nums);

        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$i] . $nums[$j] < $nums[$j] . $nums[$i]) {
                    $tem = $nums[$i];
                    $nums[$i] = $nums[$j];
                    $nums[$j] = $tem;
                }
            }
        }

        return $nums[0] == '0' ? '0' : join('', $nums);

//        $nums = array_map('strval', $nums);
//        usort($nums, function($a, $b) {
//            return ($a . $b < $b . $a) ? 1 : -1;
//        });
//        return $nums[0] == '0' ? '0' : join('', $nums);
    }
}


$a = new Solution();
var_dump($a->largestNumber(
    [1, 2, 3]
));