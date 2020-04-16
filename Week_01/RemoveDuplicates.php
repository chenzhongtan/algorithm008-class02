<?php

class Solution {

    function removeDuplicates(&$nums) {
        $len = count($nums);

        if ($len <= 0) {
            return 0;
        }

        $i = 0;
        for ($j = 1; $j < $len; $j++) {
            if ($nums[$i] != $nums[$j]) {
                $nums[++$i] = $nums[$j];
            }
        }

        return $i+1;
    }
}

$nums = [1,2,2,2,3,4,5];
echo (new Solution())->removeDuplicates($nums);