<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function sortColors(&$nums)
    {
        $lastIndex = count($nums) - 1;
        $firstIndex = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] == 2) {
                while ($nums[$lastIndex] == 2) {
                    $lastIndex--;
                }
                if ($i >= $lastIndex) {
                    continue;
                }
                if ($nums[$lastIndex] < 2) {
                    $tmp = $nums[$lastIndex];
                    $nums[$lastIndex] = $nums[$i];
                    $nums[$i] = $tmp;
                }
            } else if ($nums[$i] == 0) {

                while ($nums[$firstIndex] == 0) {
                    $firstIndex++;
                }
                if ($firstIndex >= $i) {
                    continue;
                }
                if ($nums[$firstIndex] > 0) {
                    $tmp = $nums[$firstIndex];
                    $nums[$firstIndex] = $nums[$i];
                    $nums[$i] = $tmp;
                }
            }
        }
    }
}

$a = new Solution();
$nums = [2,0,2,1,1,0];
var_dump($a->sortColors(
    $nums
));

var_dump($nums);

[2,0,1,2,1,0];
[0,0,1,2,1,2];
[0,0,1,1,2,2];
