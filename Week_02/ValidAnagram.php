<?php

//有效的字母异位词

class Solution {

	function isAnagran($s, $t) {

		/*
		$s_len = strlen($s);
		$t_len = strlen($t);

		if ($s_len != $t_len) {
			return false;
		}

		$hash = [];

		for ($i = 0; $i < $s_len; $i++) {
			isset($hash[$s[$i]]) ? $hash[$s[$i]]++ : $hash[$s[$i]] = 1;
			isset($hash[$t[$i]]) ? $hash[$t[$i]]-- : $hash[$t[$i]] = -1;
		}
		
		foreach ($hash as $value) {
			if ($value  != 0) {
				return false;
			}
		}

		return true;
		*/
	
		$s_arr = array_count_values(str_split($s));
		$t_arr = array_count_values(str_split($t));

		return $s_arr == $t_arr;
	}
}

$s = "anagram";
$t = "nagaram";
var_dump((new Solution())->isAnagran($s,$t));