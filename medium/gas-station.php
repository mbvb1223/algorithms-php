<?php
class Solution {

    /**
     * @param Integer[] $gas
     * @param Integer[] $cost
     * @return Integer
     */
    function canCompleteCircuit($gas, $cost) {
        if (array_sum($gas) < array_sum($cost)) {
            return -1;
        }
        $total = 0;
        $start = 0;
        for ($i = 0; $i < count($gas); $i++) {
            $total += $gas[$i] - $cost[$i];

            if ($total < 0) {
                $total = 0;
                $start = $i + 1;
            }

        }

        return $start;
    }
}

$a = new Solution();
var_dump($a->canCompleteCircuit(
    [1,2,3,4,5], [3,4,5,1,2]
));