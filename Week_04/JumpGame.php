<?php

class Solution {

	function canJump($nums) {
		$reach = 0;
		$len =count($nums);
		for ($i = 0; $i < $len; $i++) {
			if ($i > $reach) {
				return false;
			}
			$reach = max($i + $nums[$i], $reach);
		}
		return true;
	}
}