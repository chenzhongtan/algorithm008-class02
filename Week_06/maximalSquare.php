<?php

class Solution {
	function maximalSquare() {
		$row = count($matrix);
        if ($row == 0) return 0;
        $col = count($matrix[0]);
        $dp = array_fill(0, $row, array_fill(0, $col, 0));
        $max = 0;
        for ($i = 0; $i < $col; ++$i) {
            $dp[0][$i] = $matrix[0][$i];
            $max = max($max, $dp[0][$i]);
        }
        for ($j = 0; $j < $row; ++$j) {
            $dp[$j][0] = $matrix[$j][0];
            $max = max($max, $dp[$j][0]);
        }
        for ($i = 1; $i < $row; ++$i) {
            for ($j = 1; $j < $col; ++$j) {
                if ($matrix[$i][$j] == 1) {
                    $dp[$i][$j] = min($dp[$i - 1][$j - 1], $dp[$i - 1][$j], $dp[$i][$j - 1]) + 1;
                    $max = max($max, $dp[$i][$j]);
                }
            }
        }
        return $max * $max;
	}
}