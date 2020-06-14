<?php

class Solution {

    /**
     * @param Integer[] $arr1
     * @param Integer[] $arr2
     * @return Integer[]
     */
    function relativeSortArray($arr1, $arr2) {
        $no_exist = [];
        $ans = [];
        $hash = array_count_values($arr1);
        for ($i = 0; $i < count($arr2); $i++) {
            if (isset($hash[$arr2[$i]])) {
                for ($j = 1; $j <= $hash[$arr2[$i]]; $j++) {
                    $ans[] = $arr2[$i];
                }
                unset($hash[$arr2[$i]]);
            }
        }

        ksort($hash);

        foreach ($hash as $key => $val) {
            for ($i = 1; $i <= $val; $i++) {
                $ans[] = $key;
            }
        }

        return $ans;
    }
}
