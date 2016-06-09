<?php

class Spaceship {
	protected $fuel;
	protected $engines;
	protected $hp;
	
	public function __construct($fuel, $engines, $hp){
		$this->fuel = $fuel;
		$this->engines = $engines;
		$this->hp = $hp;
	}
	
	public function move() {
		$this->fuel = $this->fuel - $this->engines;
	}
	
	public function takeDmg($damage){
		$this->hp = $this->hp - $damage;
	}
	
	public function getFuel(){
		return $this->fuel;
	}
	
	public function getEngines(){
		return $this->engines;
	}
	
	public function getHP(){
		return $this->hp;
	}
	
}