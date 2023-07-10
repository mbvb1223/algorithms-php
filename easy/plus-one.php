<?php

class Solution
{
    function plusOne($digits)
    {
        $last = count($digits) - 1;

        for ($i = $last; $i >= 0; $i--) {
            if ($digits[$i] < 9) {
                $digits[$i] += 1;
                return $digits;
            }
            $digits[$i] = 0;
        }

        array_unshift($digits, 1);

        return $digits;
    }
}/**/

$a = new Solution();
var_dump($a->plusOne(
    [1, 2, 9]
));