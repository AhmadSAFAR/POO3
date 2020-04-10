
<?php
require_once 'HighWay.php';
require_once 'Vehicle.php';

final class ResidentialWay extends HighWay{
    protected $NbLane = 2;
    protected $MaxSpeed = 50;
public function   addVehicle(Vehicle $Vehicle):Vehicle{
    if($Vehicle instanceof Car){
        echo 'authorized';
       
    }else{
        echo 'Stop prohibited';
    }
    return $this->CurrentVehicules[]=$Vehicle;
} 

}