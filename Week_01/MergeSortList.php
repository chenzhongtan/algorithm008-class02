<?php

class Solution {

	function mergeTwoLists($l1,$l2) {
		$prehead = new ListNode(null);
        $cur = $prehead;
        while ($l1 != null && $l2 != null) {
	        if ($l1->val <= $l2->val) {
	            $cur->next = $l1;
	            $l1 = $l1->next;
	        } else {
	            $cur->next = $l2;
	            $l2 = $l2->next;
	        }
	        $cur = $cur->next;
	    }

	    if ($l1 != null) {
	        $cur->next = $l1;
	    } 
	    if ($l2 != null) {
	        $cur->next = $l2;
	    }

	    return $prehead->next;
	}
}