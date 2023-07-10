<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums)
    {
        try {
            $this->do($nums, 0);
        } catch (Exception $exception) {
            return true;
        }

        return false;

    }

    function do($nums, $index)
    {
        $value = $nums[$index];

        if ($value == 0 && $index != count($nums) - 1) {
            return false;
        }
        for ($i = 1; $i <= $value; $i++) {
            if ($index + $i == count($nums) - 1) {
                throw new \Exception('oke');
            }
            $this->do($nums, $index + $i);
        }
    }
}


$a = new Solution();
var_dump($a->canJump(
    [3,2,1,0,4]
));

