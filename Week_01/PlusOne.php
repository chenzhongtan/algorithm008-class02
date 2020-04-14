<?php

class Solution {

	public function plusOne($digits){
		$len  = count($digits);
        if ($len == 0) {
            return $digits;
        }

        for ($i = $len-1; $i >= 0; $i--) {
            $digits[$i]++;
            if ($digits[$i] % 10 != 0) {
                return $digits;
            }
            $digits[$i] = 0;
        }

        if ($digits[0] == 0) {
            array_unshift($digits,1);
        }

        return $digits;
	}
}

// $arr = [9,2,0,3]; //[9,2,0,4]
$arr = [9,9,9,9]; //[1,0,0,0,0]
$arr = [9]; //[1,0,0,0,0]
$nums = (new Solution())->plusOne($arr);
echo '<pre>';
print_r($nums);