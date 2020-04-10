<?php

// index.php

require_once 'Vehicle.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$PickUp = new Car('red', 4);
$Vtt = new Bike('purple', 1);
$Skate = new Skateboard('green', 0);
$MotorWay= new MotorWay(4,130);
$PedestrianWay = new PedestrianWay(1,10);
$ResidentialWay = new ResidentialWay();

$MotorWay->addVehicle($PickUp);
$MotorWay->getCurrentVehicles();
print_r($MotorWay);
echo '<br>';

$PedestrianWay->addVehicle($Vtt);
$PedestrianWay->getCurrentVehicles();
print_r($PedestrianWay);
echo '<br>';

$PedestrianWay->addVehicle($PickUp);
$PedestrianWay->getCurrentVehicles();
print_r($PedestrianWay);
echo '<br>';

$ResidentialWay->addVehicle($Skate);
$PedestrianWay->getCurrentVehicles();
print_r($PedestrianWay);
?>
