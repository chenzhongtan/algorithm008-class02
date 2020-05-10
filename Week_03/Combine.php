<?php  

class Solution{

	protected $result = [];
   
    function combine($n, $k) {
        if ($n <= 0 || $k <= 0 || $k > $n) return [];
        $this->backtract($n, $k, [], 1);
        return $this->result;
    }

    private function backtract($n, $k, $list, $start)
    {
        if (count($list) == $k) {
            $this->result[] = $list;
            return;
        }

        for ($i = $start; $n - $i + 1 >= $k - count($list); ++$i) {
            $list[] = $i;
            $this->backtract($n, $k, $list, $i + 1);
            array_pop($list);
        }
    }
}