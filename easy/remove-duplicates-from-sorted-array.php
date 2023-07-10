<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $a = [];
        $k = 0;
        foreach ($nums as $key=> $item) {
            if (isset($a[$item])) {
                unset($nums[$key]);
                continue;
            }
            $k++;
            $a[$item] = $item;
        }

        return $k;
    }
}

$a = new Solution();
$nums = [1, 2, 3, 2, 2, 5, 6];
var_dump($a->removeDuplicates(
    $nums
));