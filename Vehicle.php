<?php

class Vehicle
{
    protected $Color;
    protected $NbSeats;

    public function __construct(string $Color, int $NbSeats)
    {
        $this->Color = $Color;
        $this->NbSeats = $NbSeats;
    }

    public function getColor(): string
    {
        return $this->Color;
    }

    public function setColor(string $Color): void
    {
        $this->Color = $Color;
    }

    public function getNbSeats(): int
    {
        return $this->NbSeats;
    }

    public function setNbSeats(int $NbSeats): void
    {
        $this->NbSeats = $NbSeats;
    }
    
}

class Car extends Vehicle
{
    
}

class Bike extends Vehicle
{

}

class Skateboard extends Vehicle
{

}


?>