<?php

class Solution {
    private static $move = [
		[0,1], //上
		[1,0], //右
		[0,-1], //下
		[-1,0] //左
	];
    /**
     * @param Integer[] $commands
     * @param Integer[][] $obstacles
     * @return Integer
     */
    function robotSim($commands, $obstacles) {
        $x = [0,0]; 
        $y = [0,0]; 
        $facing = 0;
        $distance = 0;
        for ($i = 0; $i < count($commands); $i++) {
            if ($commands[$i] == -2) {
                $facing--;
                if ($facing < 0) $facing = 3;
            } elseif ($commands[$i] == -1) {
                $facing++;
                if ($facing > 3) $facing = 0;
            } elseif ($commands[$i] >= 1 && $commands[$i] <= 9) {
                for ($j = 0; $j < $commands[$i]; $j++) {
                    $next_move = array($y[0]+(self::$move[$facing][0]),$y[1]+(self::$move[$facing][1]));
                    if (in_array($next_move,$obstacles)){
                        break;
                    }
                    $y = $next_move;    
                }
            }

            $distance = max($distance, ($y[0]*$y[0] + $y[1]*$y[1]));
        }
        
       
        return $distance;
    }
}