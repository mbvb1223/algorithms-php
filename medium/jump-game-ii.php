<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function jump($nums)
    {
        $result[count($nums) - 1] = 0;
        for ($i = count($nums) - 2; $i >= 0; $i--) {
            if ($nums[$i] == 0) {
                continue;
            }
            $last = (count($nums) - 1) > $nums[$i] + $i ? $nums[$i] + $i : (count($nums) - 1);
            unset($min);
            for ($j = $i + 1; $j <= $last; $j++) {
                if ($j == count($nums) - 1) {
                    $min = 0;
                    continue;
                }
                if ($nums[$j] == 0) {
                    continue;
                }
                if (!isset($result[$j])) {
                    continue;
                }
                if (!isset($min)) {
                    $min = $result[$j];
                    continue;
                }
                $min = min($min, $result[$j]);
            }

            if (isset($min)) {
                $result[$i] = $min + 1;
            }
        }

        return $result[0];
    }
}

$a = new Solution();
var_dump($a->jump(
    [5,9,3,2,1,0,2,3,3,1,0,0]
));