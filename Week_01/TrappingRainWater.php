<?php
class Solution {
	/*
	function trap($height) {
		$ans = 0;
		$len = count($height);

		for ($i = 0; $i < $len; $i++) {
			$max_left = $max_right = 0;
			for ($j = $i; $j >= 0; $j--) {
				$max_left = max($max_left,$height[$j]);
			}
			for ($j = $i; $j < $len ;$j++) {
				$max_right = max($max_right,$height[$j]);
			}
			$ans += min($max_left,$max_right) - $height[$i];
		}

		return $ans;
	}
	*/

	function trap($height) {
		$ans = 0;
		$left = 0;
		$right = count($height) - 1;
		$left_maxt = 0;
		$right_max = 0;

		while ($left <= $right) {
			if ($left_max <= $right_max) {
				$ans += max(0,$left_max-$height[$left]);
				$left_max = max($left_max,$height[$left]);
				$left+=1;
			} else {
				$ans += max(0,$right_max-$height[$right]);
				$right_max = max($right_max,$height[$right]);
				$right-=1;
			}
		}

		return $ans;
	} 
}