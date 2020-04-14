<?php

class Solution {
	
	//移动0	
	public function moveZeroes1(&$nums) {
		if (empty($nums)) {
			return $nums;
		}

		$j = 0;
		$len = count($nums);
		for ($i=0; $i < $len; $i++) { 
			if ($nums[$i] != 0) {
				$nums[$j] = $nums[$i];
				$i != $j and $nums[$i] = 0;
				$j++;
			}
		}
	}
	//移动0
	public function moveZeroes2(&$nums) {
		if (empty($nums)) {
			return $nums;
		}

		$j = 0;
		$len = count($nums);
		for ( $i = 0; $i < $len; $i++) {
			if ($nums[$i] != 0) {
				$nums[$j++] = $nums[$i];
			}
		}

		for ($i=$j; $i < $len ; $i++) { 
			$nums[$i] = 0;
		}
	}

	public function moveZeroes3(&$nums) {
		$len = count($nums);
		if ($len < 2) {
			return $nums;
		}
		$j = 0;
		for ($i = 0; $i < $len; $i++) {
			if ($nums[$i] != 0) {
				$tmp = $nums[$j];
				$nums[$j++] = $nums[$i];
				$nums[$i] = $tmp;
			}
		}
	}



}

$solution = new Solution();
$nums = [0,0,0,1,0];
$solution->moveZeroes1($nums);
echo "<pre>";
var_export($nums);
$solution->moveZeroes2($nums);
echo "<pre>";
var_export($nums);