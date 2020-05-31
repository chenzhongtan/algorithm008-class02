<?php

 class Solution { 

 	function minDistance($word1, $word2) {
 		$m = strlen($word1);
        $n = strlen($word2);

        $dp = [];
        for ($i = 0; $i <= $m; $i++) $dp[$i][0] = $i;
        for ($j = 0; $j <= $n; $j++) $dp[0][$j] = $j;

        for ($i = 1; $i <= $m; $i++) {
            for ($j = 1; $j <= $n; $j++) {
                if ($word1[$i - 1] == $word2[$j - 1]) {
                    $dp[$i][$j] = $dp[$i - 1][$j - 1];
                } else {
                    $dp[$i][$j] = 1 + min($dp[$i - 1][$j - 1], min($dp[$i - 1][$j], $dp[$i][$j - 1]));
                }
            }
        }

        return $dp[$m][$n];

 	}

 }