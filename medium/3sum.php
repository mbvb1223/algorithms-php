<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums)
    {
        sort($nums);
        $result = [];
        for ($i = 0; $i < count($nums); $i++) {
            if ($i > 0 && $nums[$i - 1] == $nums[$i]) {
                continue;
            }
            $value = $nums[$i];
            $l = $i + 1;
            $r = count($nums) - 1;
            while ($l < $r) {
                $sum = $value + $nums[$l] + $nums[$r];

                if ($sum < 0) {
                    $l += 1;
                    continue;
                }

                if ($sum > 0) {
                    $r -= 1;
                    continue;
                }

                $result[] = [$value, $nums[$l], $nums[$r]];
                $l += 1;
                while (isset($nums[$l]) && $nums[$l] == $nums[$l - 1]) {
                    $l += 1;
                }
            }
        }

        return $result;
    }
}

$a = new Solution();
var_dump($a->threeSum(
    [-1, 0, 1, 2, -1, -4]
));