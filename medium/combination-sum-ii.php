<?php

class Solution
{

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum2($candidates, $target)
    {
        sort($candidates);
        $result = [];
        for ($i = 0; $i < count($candidates); $i++) {
            if ($i > 0 && $candidates[$i] == $candidates[$i - 1]) {
                continue;
            }
            if ($candidates[$i] == $target) {
                $result[] = [$candidates[$i]];
                break;
            }

            $j = $i + 1;
            $end = count($candidates) - 1;

            while ($j < count($candidates)) {
                $total = $candidates[$i] + $candidates[$j] + $candidates[$end];
                if ($j < $end) {
                    if ($total > $target) {
                        $end--;
                        continue;
                    }

                    if ($total < $target) {
                        $j++;
                        continue;
                    }

                    if ($total == $target) {
                        $result[] = [$candidates[$i], $candidates[$j], $candidates[$end]];
                        $j++;
                        continue;
                    }
                }

                $total2 = $candidates[$i] + $candidates[$j];
                if ($total2 == $target) {
                    $result[] = [$candidates[$i], $candidates[$j]];
                    break;
                }
                $j++;

            }
        }

        return $result;
    }
}

$a = new Solution();
var_dump($a->combinationSum2(
    [10, 1, 2, 7, 6, 1, 5], 8
));