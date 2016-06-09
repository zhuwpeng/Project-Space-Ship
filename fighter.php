<?php
require_once 'spaceship.php';

class Fighter extends Spaceship{
	
	protected $guns;
	protected $ammo;
	
	public function __construct($fuel, $engines, $hp, $guns, $ammo){
		parent::__construct($fuel, $engines, $hp);
		$this->guns = $guns;
		$this->ammo = $ammo;
	}
	
	public function shoot(){
		$this->ammo = $this->ammo - $this->guns;
		return $this->guns;
	}
	
	public function getGuns(){
		return $this->guns;
	}
	
	public function getAmmo(){
		return $this->ammo;
	}
	
}