<?php
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $start = 0;
        $end = count($height) - 1;
        $max = 0;
        while($start < $end) {
            $value = min($height[$end], $height[$start]) * ($end - $start);
            $max = max($max, $value);
            if ($height[$start] < $height[$end]) {
                $start++;
            } else {
                $end--;
            }
        }

        return $max;
    }

}

$a = new Solution();
var_dump($a->maxArea(
    [1,8,6,2,5,4,8,3,7]
));