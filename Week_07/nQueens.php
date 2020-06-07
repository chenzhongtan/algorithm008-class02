<?php

class Solution {

   protected $result = [];

	function solveNQueens($n) {
		if ($n == 0) {
			return [];
		}

		$board = array_fill(0,$n,array_fill(0,$n,'.'));

		$this->DFS($n,$board,0);

		return $this->result;
	}

	private function DFS($n,$board,$row) {
		if ($row == $n) {
			$tmp = [];
			foreach($board as $item) {
				$tmp[] = implode('', $item);
			}
			$this->result[] = $tmp;
			return;
		}

		for ($col = 0; $col < $n; ++$col) {
			if (!$this->isValid($n,$board,$row,$col)){
				continue;
			}
			$board[$row][$col] = 'Q';
			$this->DFS($n,$board,$row+1);
			$board[$row][$col] = '.';
		}

	}

	 private function isValid($n, $board, $row, $col){
        // 同一列
        for ($i = 0; $i < $n; ++$i) {
            if ($board[$i][$col] == 'Q') return false;
        }

        // 右上，row - 1, col + 1
        $i = $row - 1;
        $j = $col + 1;
        for (; $i >= 0 && $j < $n; --$i, ++$j) {
            if ($board[$i][$j] == 'Q') return false;
        }

        // 左上， row - 1, col - 1
        $i = $row - 1;
        $j = $col - 1;
        for (; $i >= 0 && $j >= 0; --$i, --$j) {
            if ($board[$i][$j] == 'Q') return false;
        }
        return true;
    }
}