<?php

class Solution {

	function findContentChildren($g, $s){
		sort($g);
		sort($s);

		$gi = 0; 

		foreach ($s as $val) {
			if ($val >= $g[$gi]) {
				$gi++;
			}

			if ($gi == count($g)) {
				break;
			}
		}

		return $gi;
	}
}