<?php 

class Solution {
	function merge(&$nums1, $m, $nums2, $n) {
		$len = count($nums1) - 1;
		$i = $m - 1;
		$j = $n -1;

		while ($j >= 0) {
			if ($nums1[$i] > $nums2[$j]) {
				$nums1[$len--] = $nums1[$i--];
			} else {
				$nums1[$len] = $nums2[$j--];
			}
		}

		return $nums1;
	}
}

$arr1 = [1,2,3,0,0,0];
$arr2 = [2,5,6];

$nums1 = (new Solution())->merge($arr1,3,$arr2,3);
echo '<pre>';
print_r($nums1);