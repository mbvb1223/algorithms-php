<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $arr = str_split($s);
        $result = 0;
        $tem = [];
        foreach ($arr as $key => $num) {
            if (isset($tem[$key])) {
                continue;
            }
            if ($num == "I") {
                if ($arr[$key + 1] == "V") {
                    $result += 4;
                    $tem[$key + 1] = true;
                    continue;
                }
                if ($arr[$key + 1] == "X") {
                    $result += 9;
                    $tem[$key + 1] = true;
                    continue;
                }

                $result += 1;
                continue;
            }

            if ($num == "V") {
                $result += 5;
            }

            if ($num == "X") {
                if ($arr[$key + 1] == "L") {
                    $result += 40;
                    $tem[$key + 1] = true;
                    continue;
                }
                if ($arr[$key + 1] == "C") {
                    $result += 90;
                    $tem[$key + 1] = true;
                    continue;
                }

                $result += 10;
                continue;
            }

            if ($num == "L") {
                $result += 50;
                continue;
            }

            if ($num == "C") {
                if ($arr[$key + 1] == "D") {
                    $result += 400;
                    $tem[$key + 1] = true;
                    continue;
                }
                if ($arr[$key + 1] == "M") {
                    $result += 900;
                    $tem[$key + 1] = true;
                    continue;
                }
                $result += 100;
                continue;
            }

            if ($num == "D") {
                $result += 500;
                continue;
            }

            if ($num == "M") {
                $result += 1000;
                continue;
            }
        }

        return $result;
    }
}

