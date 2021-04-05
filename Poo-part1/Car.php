<?php

class Car
{
    private int $nbWheels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel = 100;

    // déclaration du contructeur
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    // Méthode Avancer
    public function forward(): string
    {
        $this->currentSpeed = 30;
        return "Go !";
    }

    // Méthode Freiner
    public function brake(): string
    {
        if ($this->energyLevel<1){
            return "Voiture en panne";
        }
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
            $this->energyLevel --;
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    // Méthode Démarrer
    public function start():string
    {
        if ($this->energyLevel<1){
            return "Voiture en panne";
        }
        $this->energyLevel --;
        return "Démarage";
    }

    // Get the value of nbWheels
    public function getNbWheels():string
    {
    return "La voiture a ". $this->nbWheels. " roues.";
    }

    // Set the value of currentSpeed
    public function setCurrentSpeed(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
        return $this;
    }

    // Get the value of currentSpeed
    public function getCurrentSpeed():int
    {
        return $this->currentSpeed;
    }

    // Get the value of color
    public function getColor():string
    {
        return $this->color;
    }

    // Get the value of nbSeats
    public function getNbSeats():int
    {
        return $this->nbSeats;
    }

    // Get the value of energy
    public function getEnergy():string
    {
        return $this->energy;
    }

    // Get the value of energyLevel
    public function getEnergyLevel():int
    {
        return $this->energyLevel;
    }
    
    // Set the value of energyLevel Faire le plein
    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = 100;
        return $this;
    }


}