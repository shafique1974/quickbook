<?php

include('Class1.php');

/*** create a new vehicle object ***/
$vehicle = new vehicle;

/*** the brand of vehicle ***/
$vehicle->brand = 'Porsche';

/*** the shape of vehicle ***/
$vehicle->shape = 'Coupe';

/*** the color of the vehicle ***/
$vehicle->color = 'Orange';

/*** number of doors ***/
$vehicle->num_doors = 2;

/*** cost of the vehicle ***/
$vehicle->price = 100000;

/*** call the showPrice method ***/
$vehicle->showPrice();

/*** call the numDoors method ***/
$vehicle->numDoors();

/*** drive the vehicle ***/
$vehicle->drive();

$vehicle->brand();

$vehicle->color1();

?>
