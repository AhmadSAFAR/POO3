
<?php
require_once 'HighWay.php';
require_once 'Vehicle.php';

final class PedestrianWay extends HighWay{
    protected $NbLane=1;
    protected $MaxSpeed=10;
    
    public function   addVehicle(Vehicle $Vehicle):Vehicle{
        if($Vehicle instanceof Bike|| $Vehicle instanceof Skateboard ){
           echo 'authorized';
           
        }else{
            echo 'Stop prohibited';
        }
        return $this->CurrentVehicules[]=$Vehicle;
    } 
}