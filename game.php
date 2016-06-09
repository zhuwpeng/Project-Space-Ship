<?php
include('spaceship.php');
include('fighter.php');
include('cargoship.php');

$fighter = new Fighter(100, 4, 600, 20, 300);
$spaceship = new Spaceship(200, 10, 400);

function display($fighter, $spaceship){
echo "Fighter Hp " . $fighter->getHP() . " Ammo " . $fighter->getAmmo() . " Fuel " . $fighter->getFuel() . "<br>";
echo "Space Ship Hp " . $spaceship->getHP() . " Fuel " . $spaceship->getFuel() . "<br><br>";
}

display($fighter, $spaceship);

$fighter->move();
$spaceship->move();

display($fighter, $spaceship);

$spaceship->takeDmg($fighter->shoot());

display($fighter, $spaceship);

$cargo = new CargoShip(500, 500, 40, 1000);

function display2($cargo){
	echo "Cargo Hp " . $cargo->getHP() . " Capacity " . $cargo->getCapacity() . " Fuel " . $cargo->getFuel() . "<br><br>";
}

display2($cargo);

$cargo->move();
$cargo->load();
$cargo->takeDmg($fighter->shoot());

display($fighter, $spaceship);
display2($cargo);

$mothership = array();
$numberOfHips = 5;

for($i = 0; $i < $numberOfHips; $i++){
	$mothership[$i]= new Fighter(100, 20, 50, 10, 100);
}

var_dump($mothership);

print "<br><br>";

foreach($mothership as $hips){
	$hips->move();
}

$mothership[2]->shoot();

var_dump($mothership);

?>