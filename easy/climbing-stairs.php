<?php

class Solution
{

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n)
    {
        if ($n == 0) {
            return 0;
        }
        if ($n == 1) {
            return 1;
        }
        if ($n == 2) {
            return 2;
        }

        return $this->climbStairs($n - 1) + $this->climbStairs($n - 2);
    }
}

$a = new Solution();
var_dump($a->climbStairs(
    5
));