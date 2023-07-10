<?php

class Solution
{
    function strStr($haystack, $needle)
    {
        if (!$needle) {
            return 0;
        }
        $arr = str_split($haystack);

        foreach ($arr as $key => $item) {
            if (substr($haystack, $key, strlen($needle)) === $needle) {
                return $key;
            }
        }

        return -1;
    }
}