<?php

//最佳买股票时机
class Solution {

	function maxProfit($prices){
		$result = 0;
		$len = count($prices);
		if ($len < 0) {
			return $result;
		}

		for ($i = 0; $i < $count; $i++) {
			$diff = $prices[$i+1] - $prices[$i];
			if ($diff > 0) {
				$result += $diff;
			}
		}

		return $result;
	}
}