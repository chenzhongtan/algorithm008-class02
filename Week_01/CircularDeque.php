<?php 

class MyCircularDeque {
    public $cap;
    public $front = 0;
    public $rear = 0;
	public $circular_deque = [];

	public function __construct($k) {
		$this->cap = $k + 1;
	}

	public function insertFront($value) {
		if ($this->isFull()) {
			return false;
		}

		$this->front = ($this->front - 1 + $this->cap) % $this->cap;
        $this->circular_deque[$this->front] = $value;

        return true;
	}

	public function insertLast($value) {
		if ($this->isFull()) {
			return false;
		}

		$this->circular_deque[$this->rear] = $value;
        $this->rear = ($this->rear + 1) % $this->cap;

        return true;
	} 

	public function deleteFront() {
		if ($this->isEmpty()) {
			return false;
		}

		$this->front = ($this->front + 1) % $this->cap;

        return true;
	}

	public function deleteLast() {
		if ($this->isEmpty()) {
			return false;
		}

		$this->rear = ($this->rear - 1 + $this->cap) % $this->cap;

        return true;
	}

	public function getFront() {
		if ($this->isEmpty()) {
			return -1;
		}

		return $this->circular_deque[$this->front];
	}	

	public function getRear() {
		if ($this->isEmpty()) {
			return -1;
		}
		//防止越界
		$index = ($this->rear - 1 + $this->cap) % $this->cap;
		return $this->circular_deque[$index];
	}

	public function isEmpty() {
		return $this->front == $this->rear;
	}

	public function isFull() {
		return ($this->rear + 1) % $this->cap == $this->front;
	}
}