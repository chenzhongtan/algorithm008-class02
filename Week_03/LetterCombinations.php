<?php

class Solution {

	public $hashmap = [
		2 => 'abc',
		3 => 'def',
		4 => 'ghi',
		5 => 'jkl',
		6 => 'mno',
		7 => 'pqrs',
		8 => 'tuv',
		9 => 'wxyz',
	];

	public $result = [];

	function letterCombinations($digits) {
		if (strlen($digits) != 0) {
			$this->backtrack("",$digits);
		}

		return $this->result;
	}

	public function backtrack($combination, $next_digits) {
		if (strlen($next_digits) == 0) {
			$this->result[] = $combination;
		} else {
			$digit = substr($next_digits, 0,1);
			$letters = $this->hashmap[$digit];
			for ($i = 0; $i < strlen($letters); $i++) {
				$letter = substr($letters,$i,1);
				$this->backtrack($combination.$letter,substr($next_digits,1));
			}
		}
	}
}

$res = (new Solution())->letterCombinations('23');
echo '<pre>';
print_r($res);









