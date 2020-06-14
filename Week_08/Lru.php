<?php

class LRUCache {
    /**
     * @param Integer $capacity
     */
    public $array_lru = [];
    public $used = [];
    public $capacity = 0;

    function __construct($capacity) {
        $this->capacity = $capacity;
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        $value = -1;
        if (isset($this->array_lru[$key])) {
            $index = array_search($key,$this->used);
            unset($this->used[$index]);
            $this->used[] = $key;
            $value = $this->array_lru[$key];
        }
        return $value;
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        if (isset($this->array_lru[$key])) {
            $this->array_lru[$key] = $value;
            $index = array_search($key, $this->used);
            unset($this->used[$index]);
            $this->used[] = $key;
        } else {
            if (count($this->array_lru) >= $this->capacity) {
                $k = reset($this->used);
                array_shift($this->used);
                unset($this->array_lru[$k]);
            }
            $this->used[] = $key;
            $this->array_lru[$key] = $value;
        }
        
    }
}