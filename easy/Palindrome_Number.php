<?php

class Solution
{

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        if ($x < 0 || ($x % 10 == 0 && $x != 0)) {
            return false;
        }
        $y = $x;
        $revertedNumber = 0;
        while ($x > 0) {
            $revertedNumber = $revertedNumber * 10 + $x % 10;
            $x = (int)($x / 10);
        }

        return $y == $revertedNumber;
    }
}

$a = new Solution();
var_dump($a->isPalindrome(
    121
));
