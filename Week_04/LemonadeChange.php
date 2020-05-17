<?php

class Solution {

	function lemonadeChange($bills) {
		$map = [
			5 => 0,
			10 => 0
		];

		foreach ($bills as  $value) {
			if ($value == 5) {
				$map[5]++;
			} else if ($value == 10) {
				if ($map[5] < 1){
					return false;
				}
				$map[5]--;
				$map[10]++;
			} else if ($value == 20) {
				if ($map[10] < 1 and $map[5] < 3 ) {
					return false;
				} 
				if ($map[5] < 1) {
					return false;
				}

				if ($map[10] >= 1) {
					$map[5]--;
					$map[10]--;
				} else {
					$map[5] -= 3;
				}
			}
		}
		return true;

	}
}