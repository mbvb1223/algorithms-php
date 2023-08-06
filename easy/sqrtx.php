<?php

class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x)
    {
        $result = 0;
        $start = 0;
        $end = $x;

        while ($start <= $end) {
            $mid = (int)(($start + $end) / 2);

            if ($mid * $mid === $x) {
                return $mid;
            } elseif ($mid * $mid < $x) {
                $start = $mid + 1;
                $result = $mid;
            } else {
                $end = $mid - 1;
            }
        }

        return $result;
    }
}

$a = new Solution();
var_dump($a->mySqrt(
   8
));