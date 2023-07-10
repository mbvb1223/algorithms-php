<?php

class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        $temp2 = [];
        $temp3 = [];
        foreach ($board as $i => $item) {
            $tem = [];

            foreach($item as $key => $number) {
                if (!is_numeric($number)) {
                    continue;
                }
                $number = (int) $number;
                $j = intdiv($key, 3);
                $h = intdiv($i, 3);
                if (!isset($temp3[$h][$j][$number])) {
                    $temp3[$h][$j][$number] = $number;
                } else {
                    return false;
                }

                if (!isset($temp2[$key][$number])) {
                    $temp2[$key][$number] = $number;
                } else {
                    return false;
                }

                if (!isset($tem[$number])) {
                    $tem[$number] = $number;
                } else {
                    return false;
                }
            }
        }

        return true;
    }
}

$a = new Solution();
var_dump($a->isValidSudoku([["5","3",".",".","7",".",".",".","."],["6",".",".","1","9","5",".",".","."],[".","9","8",".",".",".",".","6","."],["8",".",".",".","6",".",".",".","3"],["4",".",".","8",".","3",".",".","1"],["7",".",".",".","2",".",".",".","6"],[".","6",".",".",".",".","2","8","."],[".",".",".","4","1","9",".",".","5"],[".",".",".",".","8",".",".","7","9"]]));