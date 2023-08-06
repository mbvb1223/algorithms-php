<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        $k = 2;
        $count = count($nums);

        for ($i = 1; $i < $count - 1; $i++) {
            if ($nums[$i] === $nums[$i - 1] && $nums[$i] === $nums[$i + 1]) {
                unset($nums[$i - 1]);
            } else {
                $k++;
            }
        }
        return $k;
    }
}


$nums = [0,0,1,1,1,1,2,3,3];
$a = new Solution();
var_dump($a->removeDuplicates(
    $nums
));