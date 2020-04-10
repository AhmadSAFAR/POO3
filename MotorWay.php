<?php
require_once 'HighWay.php';
require_once 'Vehicle.php';

final class MotorWay extends HighWay{
   protected $NbLane;
    protected $MaxSpeed;


    public function __construct(int  $NbLane=4, int $MaxSpeed=130){
        $this->NbLane = $NbLane;
        $this->MaxSpeed=$MaxSpeed;
    }
    
 
    public function  addVehicle(Vehicle $Vehicle):Vehicle 
    {
        if($Vehicle instanceof Car ){
            echo 'authorized';
          
        }else{
            echo 'Stop prohibited';
        }
        return $this->CurrentVehicules[]=$Vehicle;
    }

}