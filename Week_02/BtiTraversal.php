<?php

//二叉树中序遍历
class Solution {

	function inoderTraversal($root) {
		$res = [];
		$this->inOrder($root,$res);
		return $res;
	}

	function inOrder($root, &$res) {
		if ($root  == null) {
			return false;
		}

		if ($root->left != null) {
			$this->inOrder($root->left, $res);
		}

		$res[]= $root->val;

		if ($root->right != null) {
			$this->inOrder($this->right, $res);
		}
	}
}