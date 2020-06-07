<?php

class Solution {

	function climbStairs($n) {
		$dp = [];
		$dp[0] = 1;
		$dp[1] = 1;

		for ($i = 2; $i <= $n; $i++) {
			$dp[$i] = $dp[$i - 1] + $db[$i - 2];
		}

		return $dp[$n];
	}
}