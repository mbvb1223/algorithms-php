<?php

class Solution
{

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows)
    {
        $tem = [];
        $flat = 0;
        $k = true;
        for ($i = 0; $i < strlen($s); $i++) {
            if ($k) {
                $flat++;
                if ($flat == $numRows) {
                    $k = false;
                }
            } else {
                $flat--;
                if ($flat == 1) {
                    $k = true;
                }
            }
            $tem[$flat][] = $s[$i];
        }
        $re = "";
        foreach ($tem as $item) {
            $re .= implode("", $item);
        }

        return $re;
    }
}

$a = new Solution();
var_dump($a->convert(
    "PAYPALISHIRING", 4
));