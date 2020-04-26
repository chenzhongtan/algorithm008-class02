<?php

/**
 * 字母异位词分组
 */
class Solution {

	function groupAnagrams($strs) {
		$result = [];

		for ($i = 0; $i < count($strs); $i++) {
			$arr = str_split($strs[$i]);
			sort($arr);
			$key = implode('', $arr);

			if (isset($result[$key])) {
				array_push($result[$key], $strs[$i]);
			} else {
				$result[$key] = [$strs[$i]];
			}
		}

		return array_values($result);
	}
}