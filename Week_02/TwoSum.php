<?php

//两数之和
class Solution {

	public function twoSum($nums, $target) {
		$len = count($nums);
		if ($len < 2) {
			return [];
		}

		$hash = [];
		for ($i = 0; $i < $len; $i++) {
			$diff = $target - $nums[$i];
			if (isset($hash[$diff])) {
				return [$i,$hash[$diff]];
			} else {
				$hash[$nums[$i]] = $i;
			}
		}

		return false;
	}
}

var_dump((new Solution())->twoSum([2,3,5],5));