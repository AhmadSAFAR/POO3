<?php
abstract class HighWay
{
    protected $CurrentVehicles;   
    protected $NbLane;
    protected $MaxSpeed;
    

    public  function getCurrentVehicles()
    {
        return $this->CurrentVehicles;
    }

   public  function setCurrentVehicles(array $CurrentVehicles): void
    {
   
        $this->CurrentVehicles = $CurrentVehicles;
    }
       
   public  function getNbLane():int{
        return $this->NbLane;
    }

    public  function setnNbLane(int $NbLane): void
    {
         $this->NbLane=$NbLane;
    }

   public  function getMaxSpeed(): int
    {
       return $this->MaxSpeed;
    }

  public  function setMaxSpeed(int $MaxSpeed): int{
    return $this->MaxSpeed=$MaxSpeed;
  }
    
  
    abstract public  function addVehicle(Vehicle $Vehicle):Vehicle; 
}


?>