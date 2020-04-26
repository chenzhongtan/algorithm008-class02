<?php

/**
 *  N叉树的层序遍历
 */

class Solution {

	function levelOrder($root) {
        $res = []; 
        $level = []; 
        
        $queue = $root ? [$root] : [];
        $next_quene= [];
        while (count($queue)) {
            $i = 0;
            $l = count($queue);
            while ($i < $l) {
                $node = $queue[$i];
                array_push($level, $node->val); 
                foreach($node->children as $child) {
                    array_push($next_quene, $child);
                };
                $i++;
            };
            array_push($res,$level);
            $level = [];
            $queue = $next_quene;
            $next_quene = [];
        };
        
        return $res;
    }
}