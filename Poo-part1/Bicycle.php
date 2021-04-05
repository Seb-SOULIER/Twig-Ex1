<?php
class Bicycle
{
    public string $color;
    public int $currentSpeed;
    public int $nbSeats = 1;
    public int $nbWheels = 2;

    // public function __construct(string $color)
    // {
    // $this->color = $color;
    // }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }


    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function dump()
    {
        var_dump($this);
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     */ 
    public function setColor($color):void
    {
        $this->color = $color;
    }


    /**
     * Get the value of currentSpeed
     */ 
    public function getCurrentSpeed():int
    {
        return $this->currentSpeed;
    }

    /**
     * Set the value of currentSpeed
     */ 
    public function setCurrentSpeed(int $currentSpeed):void
    {
        if($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
        }
    }
}