<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function threeSumClosest($nums, $target)
    {
        sort($nums);

        $result = $nums[0] + $nums[1] + $nums[2];
        $min = abs($result - $target);
        for ($i = 0; $i < count($nums); $i++) {
            if ($i > 0 && $nums[$i - 1] == $nums[$i]) {
                continue;
            }

            $l = $i + 1;
            $r = count($nums) - 1;

            while ($l < $r) {
                $sum = $nums[$i] + $nums[$l] + $nums[$r];
                $dis = abs($sum - $target);

                if ($dis < $min) {
                    $result = $sum;
                    $min = $dis;
                }

                if ($sum < $target) {
                    $l++;
                    while (isset($nums[$l]) && $nums[$l] == $nums[$l - 1]) {
                        $l++;
                    }
                    continue;
                }

                if ($sum > $target) {
                    $r--;
                    continue;
                }


                return $sum;
            }

        }

        return $result;


        // $n = count($nums);
        // $closestSum = $nums[0] + $nums[1] + $nums[2];
        // $minDiff = abs($closestSum - $target);

        // sort($nums);

        // for ($i = 0; $i < $n - 1; $i++) {

        //     $left = $i + 1;
        //     $right = $n - 1;

        //     while ($left < $right) {
        //         $sum = $nums[$i] + $nums[$left] + $nums[$right];
        //         $diff = abs($sum - $target);

        //         if ($diff < $minDiff) {
        //             $minDiff = $diff;
        //             $closestSum = $sum;
        //         } elseif ($sum < $target) {
        //             $left++;
        //         } elseif ($sum > $target) {
        //             $right--;
        //         } else {
        //             return $sum;
        //         }
        //     }
        // }

        // return $closestSum;
    }
}

$a = new Solution();
var_dump($a->threeSumClosest(
    [0, 0, 0], 1
));