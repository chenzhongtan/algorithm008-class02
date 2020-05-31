<?php

/**
 * 最小路径和
 */
class Solution {

	function minPathSum($grid) {
		if ($grid) {
			return 0;
		}

		$m = count($grid);
		$n = count($grid[0]);

		$arr = [];
		$arr[0][0] = $grid[0][0];

		for ($i = 1; $i < $m; $i++) {
			$arr[$i][0] = $arr[$i - 1][0] + $grid[$i][0];
		}

		for ($i = 1; $i < $n; $i++) {
			$arr[0][$i] = $arr[0][$i - 1] + $grid[0][$i];
		}

		for ($i = 1; $i < $m; $i++) {
			for ($j = 1; $j < $n; $j++) {
				$arr[$i][$j] = 
				$grid[$i][$j] = min($arr[$i - 1][$j],$arr[$i][$j - 1]);
			}
		}

		return $arr[$m - 1][$n - 1];
	}
}