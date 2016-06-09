<?php
require_once 'spaceship.php';

class CargoShip extends Spaceship{
	
	protected $capacity;
	
	public function __construct($capacity, $fuel, $engines, $hp){
		parent::__construct($fuel, $engines, $hp);
		$this->capacity = $capacity;
	}
	
	public function load(){
		$this->capacity = $this->capacity - 100;
	}
	
	public function drop(){
		$this->capacity = $this->capacity + 100;
	}
	
	public function getCapacity(){
		return $this->capacity;
	}
	
}