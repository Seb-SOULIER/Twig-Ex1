<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();
var_dump($bike);

// $bike->color = 'blue';
$bike->setColor('blue');
$bike->currentSpeed = 0;
var_dump($bike); // then, another dump.

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
$rockrider->color = 'yellow';


// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->color = 'black';

$tornado->forward();

var_dump($bike);
$rockrider->dump();
$tornado->dump();

// Car
$car1 = new Car('Red',5,'essence');
$car2=new Car('Jaune',4,'Diesel');
var_dump($car1);
var_dump($car2);

// Moving car
$car1->setCurrentSpeed(0);
$car2->setCurrentSpeed(0);

// Moving Car 1
echo 'La voiture ' . $car1->getColor().' : ' . $car1->start() . '<br>';
echo $car1->forward();
echo '<br> Vitesse de la voiture '.$car1->getColor().' : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
echo $car1->brake();
echo '<br> Vitesse du voiture : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
echo $car1->brake(). '<br>';
echo 'Il reste '. $car1->getEnergyLevel(). "L d'essence." . '<br><br>';

// Moving Car 2
echo 'La voiture ' . $car2->getColor().' : ' . $car2->start() . '<br>';
echo $car2->forward();
echo '<br> Vitesse de la voiture '.$car2->getColor().' : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
echo $car2->brake();
echo '<br> Vitesse du voiture : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
echo $car2->brake(). '<br>';
echo 'Il reste '. $car2->getEnergyLevel(). "L d'essence." . '<br><br>';

// Caracteristique Car 1
echo "La voiture a :" . $car1->getNbSeats(). ' places <br>' ;
echo "La voiture est :" .$car1->getEnergy(). '<br>' ;
echo 'Il reste '. $car1->getEnergyLevel(). "L d'essence." . '<br>';
echo 'la voiture est : '.$car1->getColor(). '<br>' ;
echo 'La voiture roule a : ' . $car1->getCurrentSpeed(). 'km/h <br>' ;
echo $car1->getNbWheels(). '<br><br>' ;

// Caracteristique Car 2
echo "La voiture a :" . $car2->getNbSeats(). ' places <br>' ;
echo "La voiture est :" .$car2->getEnergy(). '<br>' ;
echo 'Il reste '. $car2->getEnergyLevel(). "L d'essence." . '<br>';
echo 'la voiture est : '.$car2->getColor(). '<br>' ;
echo 'La voiture roule a : ' . $car2->getCurrentSpeed(). 'km/h <br>' ;
echo $car2->getNbWheels(). '<br>' ;
