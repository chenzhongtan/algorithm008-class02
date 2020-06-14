<?php  

class Solution {
	function hammingWeight() {
		$count = 0 ;
        while($n){
            $n &= $n - 1;
            $count ++;
        }
        return $count;
	}
}