<?php


class Solution {

    function majorityElement($nums) {
        $count = array_count_values($nums);
    	return array_search(max($count), $count);
    }
}