<?php

class Solution
{
    protected $result = [];

    function permuteUnique($nums) {
        if (empty($nums)) return [];
        sort($nums);
        $visited =
            array_fill(0, count($nums), false);
        $this->backtract($nums, [], $visited);
        return $this->result;
    }

    private function backtract($nums, $path, $visited) {
        if (count($path) == count($nums)) {
            $this->result[] = $path;
            return;
        }
        for ($i = 0; $i < count($nums); ++$i) {
            if ($visited[$i]) continue;
            if ($i > 0 && $visited[$i - 1] && $nums[$i] == $nums[$i - 1]) continue;
            $path[] = $nums[$i];
            $visited[$i] = true;
            $this->backtract($nums, $path, $visited);
            array_pop($path);
            $visited[$i] = false;
        }
    }
}