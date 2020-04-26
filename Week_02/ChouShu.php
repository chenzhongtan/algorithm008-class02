<?php

class Solution {
	function nthUglyNumber($n) {

        $point2 = $point3 = $point5 = 0;
        
        $dp = array_fill(0, $n, null);
        $dp[] = 1;

        for ($i = 1; $i < $n; $i++) {
            $dp[$i] = min($dp[$point2] * 2, $dp[$point3] * 3, $dp[$point5] * 5);
            if ($dp[$i] == $dp[$point2] * 2) {
            	$point2++;
            }
            if ($dp[$i] == $dp[$point3] * 3) {
            	$point3++;
            }
            if ($dp[$i] == $dp[$point5] * 5) {
            	$point5++;
            }
        }

        return $dp[$n - 1];
    }

}