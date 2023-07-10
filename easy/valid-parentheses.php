<?php

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $arr = str_split($s);
        $temp = [];
        foreach ($arr as $key => $item) {
            if ($key == 0 && !in_array($item, ['(', '{', '['])) {
                return false;
            }

            if (in_array($item, ['(', '{', '['])) {
                $temp[] = $item;
            }
            if ($item == ')') {
                if ($temp[count($temp) - 1] == "(") {
                    array_pop($temp);
                } else {
                    return false;
                }
            } else if ($item == "}") {
                if ($temp[count($temp) - 1] == "{") {
                    array_pop($temp);
                } else {
                    return false;
                }
            } else if ($item == "]") {
                if ($temp[count($temp) - 1] == "[") {
                    array_pop($temp);
                } else {
                    return false;
                }
            }
        }

        return !$temp;
    }
}