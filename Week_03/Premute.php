<?php

class Solution {
	protected $result = [];
    
    function permute($nums) {
        $count = count($nums);
        if ($count == 0) return $this->result; 
        $this->backtract($nums, 0, []);
        return $this->result;
    }

    private function backtract($nums, $depth, $path)
    {
        if ($depth == count($nums)) {
            $this->result[] = $path;
            return;
        }

        for ($i = 0; $i < count($nums); ++$i) {
            if (in_array($nums[$i], $path)) continue;
            $path[] = $nums[$i];
            $this->backtract($nums, $depth + 1, $path);
            array_pop($path);
        }
    }
}