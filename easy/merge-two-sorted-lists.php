<?php

class Solution
{
    function mergeTwoLists($l1, $l2)
    {
        $k1 = 0;
        $k2 = 0;
        $result = [];
        foreach($l1 as $item) {
            $k1++;
            if ($item <= $l2[$k2]) {
                $result[] = $item;
            } else {
                $result[] = $l2[$k2];
                $k2++;
                for ($i = $k2; $i < count($l2); $i++) {
                    if ($l2[$i] <= $item) {
                        $result[] = $l2[$i];
                        $k2++;
                    } else {
                        $result[] = $item;
                        break;
                    }
                }
            }
        }
        if ($k1 < count($l1) - 1) {
            for ($i = $k1; $i < count($l1); $i++) {
                $result[] = $l1[$i];
            }
        } else {
            for ($i = $k2; $i < count($l2); $i++) {
                $result[] = $l2[$i];
            }
        }

        var_dump($result);
    }
}

$a = new Solution();
var_dump($a->mergeTwoLists(
    [1, 2, 4, 5, 6, 9],
    [1, 3, 4, 11]
));
