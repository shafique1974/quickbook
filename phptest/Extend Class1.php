
<?php

/*** include the vehicle class definition ***/
include('Class1.php');

class motorcycle extends vehicle{

/*** the number of side cars ***/
private $num_sidecars;

private $handlebars;

/**
*
* set the type of handlebars
*
* @access public
*
* @param string
*
* @return string
*
**/
public function setHandlebars($handlebarType){
  $this->handlebars=$handlebarType;
}

/**
*
* Set number of side cars
*
* @access public
*
* @param int
*
* @return int
*
**/
public function setSidecar($numSidecars){
  $this->numSidecars = $numSidecars;
}


/**
*
* Show the numbers of sidecars
*
* @return string
*
**/
public function showSideCar(){
  echo 'This motorcyle has '. $this->numSidecars.' sidecar<br />';
}

} /*** end of class ***/


/*** our userland code ***/

/*** create a new vehicle object ***/
$vehicle = new motorcycle;

/*** the brand of vehicle ***/
$vehicle->brand = 'Harley Davidson';

/*** the shape of vehicle ***/
$vehicle->shape = 'Sportster';

/*** the color of the vehicle ***/
$vehicle->color = 'Black';

/*** number of doors ***/
$vehicle->num_doors = 0;

/*** cost of the vehicle ***/
$vehicle->price = 25000;

/*** type of handle bars ***/
$vehicle->setHandlebars('Ape Hangers');

/*** set the sidecar ***/
$vehicle->setSidecar(1);

/*** show the vehicle brand and type ***/
echo $vehicle->brand.': '.$vehicle->shape.'<br />';


/*** call the showPrice method ***/
$vehicle->showPrice();

/*** show the sidecars ***/
$vehicle->showSideCar();

/*** drive the vehicle ***/
$vehicle->drive();

?>