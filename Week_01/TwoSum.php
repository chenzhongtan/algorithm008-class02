<?php

class Solution {
	
	public function twoSum($nums , $target) {
		 $len = count($nums);
        if ($len < 2) {
            return [];
        }

        $hash = [];
        for ($i = 0; $i < $len; $i++) {
            $diff = $target - $nums[$i];
            if (isset($hash[$diff])) {
                return [$i , $hash[$diff]];
            }
            $hash[$nums[$i]] = $i;
        }

        return [];
	}
}

$arr = [1,2,3,4,5,5,5,6];
$result = (new Solution())->twoSum($arr,10);
print_r($result);