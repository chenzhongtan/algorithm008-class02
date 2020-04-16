<?php
class Solution {

	/*
    // 这段代码在LeetCode上没通过,超出时间限制。
    function rotate(&$nums, $k) {
        if($k < 0){
            return;
        }
        $len = count($nums);
        for ($i = 0; $i < $k; $i++) {
            $previous = $nums[$len - 1];
            for ($j = 0; $j < $len; $j++) {
                $temp = $nums[$j];
                $nums[$j] = $previous;
                $previous = $temp;
            }
        }
    }
    */
   
   /*
   function rotate(&$nums, $k) {
   		if ($k < 0) {
   			return $nums;
   		}

   		$len = count($nums);
   		for ($i = 0; $i < $k; $i++) {
   			$previous = $nums[$len-1];
   			unset($nums[$len-1]);
   			array_unshift($nums,$previous);
   		}

   		return $nums;
   }
   */
  

    function rotate(&$nums, $k) {
        $len = count($nums);
        if ($k < 0 || $len <= 1) {
            return $nums;
        }
        $k %= count($nums); //需要移动的个数
        $nums = array_reverse($nums);
        $this->reverse($nums,0,$k-1);
        $this->reverse($nums,$k,$len-1);

        return $nums;
    }

    function reverse(&$nums,$start,$end){
        while ($start < $end) {
            $temp = $nums[$start];
            $nums[$start++] = $nums[$end];
            $nums[$end--] = $temp;
        }
    }
}

$arr = [1,2,3,4,5,6,7];
$arr = (new Solution())->rotate($arr,3);
echo '<pre>';
print_r($arr);
