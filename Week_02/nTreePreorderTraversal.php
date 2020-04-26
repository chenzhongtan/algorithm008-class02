<?php

//N叉树前序遍历
class Solution {

	function preorder($root) {
		$res = [];
		$this->_preorder($root,$res);

		return $res;
	}

	private function _preorder($root,&$res) {
		if (!$root) {
			return [];
		}

		$res[] = $root->val();
		foreach ($root->children as $val) {
			$this->_preorder($v,$res);
		}
	}
}