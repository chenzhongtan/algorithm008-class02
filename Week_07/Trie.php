
<?php

	class TireNode{
    public $letter; 
    public $children = []; 
    public $isEnd = false; 
    
    public function __construct($letter=''){
        $this->letter = $letter;
    }
}

class Trie {
    private $root;
    private $size;
    
    public function __construct(){
        $this->root = new TireNode();
        $this->size = 0;
    }
    
    public function getRoot(){
        return $this->root;
    }
    
    public function getSize(){
        return $this->size;
    }
    
    public function insert($word){
        $cur = $this->getRoot();
        $l = strlen($word);

        for($i=0;$i<$l;$i++){
            $letter = $word[$i];            
            if(empty($cur->children[$letter])){
                $cur->children[$letter] = new TireNode($letter);              
                $this->size ++;
            }
            $cur = $cur->children[$letter];
        }
        
        $cur->isEnd = true;
    }
    
    public function search($word){
        $l = strlen($word);
        $cur = $this->getRoot();
        
        for($i=0;$i<$l;$i++){
            $char = $word[$i];
            if(empty($cur->children[$char])){
                return false;
            }
            $cur = $cur->children[$char];
        }
        return $cur->isEnd;
    }

    public function startsWith($prefix) {
        $l = strlen($prefix);
        $cur = $this->getRoot();
        
        for($i=0;$i<$l;$i++){
            $char = $prefix[$i];
            if(empty($cur->children[$char])){
                return false;
            }
            $cur = $cur->children[$char];
        }
        return true;
    }

    public function remove($word){
        return $this->removeChildren($this->getRoot(),0,$word);
    }
    
    private function removeChildren($node,$index,$word){
        if(!$this->search($word)){
            return false;
        }
        
        if($index == strlen($word)){
            if(!$node->isEnd){ 
                return false;
            }
            
            if(!empty($node->children)){ 
                return false;
            }
            
            return true;
        }
        
        $char = $word[$index];
        if(empty($node->children[$char])){
            return false;
        }
        
        $res = $this->removeChildren($node->children[$char],++$index,$word);
        if($res && $node->children){
            $node->children = [];
            return true;
        }
        
        return false; 
    }

}
