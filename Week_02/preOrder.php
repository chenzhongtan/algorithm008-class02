<?php

//二叉树前序遍历
class Solution {

	function preorderTraversal($root) {
		$res = [];
		$this->preOrder($root,$res);
		return $res;
	}

	function preOrder($root, &$res) {
		if ($root  == null) {
			return false;
		}

		$res[]= $root->val;
		if ($root->left != null) {
			$this->preOrder($root->left, $res);
		}

		if ($root->right != null) {
			$this->preOrder($this->right, $res);
		}
	}
}