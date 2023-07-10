<?php

class Solution
{

    private $result = [];

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function spiralOrder(array $matrix)
    {
        $this->do($matrix, 1);

        return $this->result;
    }

    function do($matrix, $type)
    {
        if (!$matrix) {
            return;
        }
        if ($type == 1) {
            $this->result = array_merge($this->result, $matrix[0]);
            unset($matrix[0]);

            $this->do(array_values($matrix), 2);
        }

        if ($type == 2) {
            foreach ($matrix as $key => $item) {
                $lastIndex = count($item) - 1;
                $this->result[] = $matrix[$key][$lastIndex];
                unset($matrix[$key][$lastIndex]);
                if (count($matrix[$key]) == 0) {
                    unset($matrix[$key]);
                }
            }
            $this->do($matrix, 3);
        }

        if ($type == 3) {
            $lastItem = array_pop($matrix);
            $this->result = array_merge($this->result, array_reverse($lastItem));
            $this->do($matrix, 4);
        }

        if ($type == 4) {
            for ($i = count($matrix) - 1; $i >= 0; $i--) {
                $this->result[] = $matrix[$i][0];
                unset($matrix[$i][0]);
                if (count($matrix[$i]) == 0) {
                    unset($matrix[$i]);
                } else {
                    $matrix[$i] = array_values($matrix[$i]);
                }
            }
            $this->do($matrix, 1);
        }
    }
}


$a = new Solution();
var_dump($a->spiralOrder(
    [[1,11],[2,12],[3,13],[4,14],[5,15],[6,16],[7,17],[8,18],[9,19],[10,20]]
));

