<?php 

//前K个高频元素  还可以用优先队列实现
class Solution {
	$value_counts =   array_count_values($nums);
    arsort($value_counts);
    $value = array_keys($value_counts);
    $res = array_slice($value,0,$k);

    return $res;   
}