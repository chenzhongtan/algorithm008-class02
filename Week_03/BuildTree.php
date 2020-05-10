<?php
//构建二叉树
class Solution{

	function buildTree($preorder, $inorder) {
		 if (count($inorder) == 0) {
            return null;
        }

        $root = new TreeNode($preorder[0]);
        //查找根节点在中序遍历中的位置
        $mid = array_search($preorder[0],$inorder);
        //构建左子树
        $root->left = $this->buildTree(array_slice($preorder, 1, $mid + 1), array_slice($inorder, 0, $mid));
        $root->right = $this->buildTree(array_slice($preorder, $mid + 1), array_slice($inorder, $mid + 1));
        
        return $root;
	}
}