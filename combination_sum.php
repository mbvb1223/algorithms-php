<?php

class Solution {

    private array $result = [];

    function combinationSum(array $candidates, int $target): array
    {
        $candidates = array_filter(
            $candidates,
            function($v) use ($target) {
                return $v <= $target;
            }
        );
        sort($candidates);

        $this->findNext($candidates, $target);

        return $this->result;
    }

    function addToResult($set, $element): void
    {
        array_push($set, $element);
        $this->result[implode('', $set)] = $set;
    }

    function findNext(array &$candidates, int $remains, array $set = [], int $from = 0): void
    {
        for ($i = $from; $i < count($candidates); $i++) {
            if ($remains == $candidates[$i]) {
                $this->addToResult($set, $candidates[$i]);
                return;
            }
            if ($remains > $candidates[$i]) {
                array_push($set, $candidates[$i]);
                $this->findNext($candidates, $remains - $candidates[$i], $set, $i);
                array_pop($set);
            } else {
                return;
            }
        }
    }
}

$a = new Solution();
var_dump($a->combinationSum([1,2,3,4], 7));