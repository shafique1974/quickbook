<?php
class vehicle{
/*** define public properties ***/

/*** the color of the vehicle ***/
public $color;

/*** the number of doors ***/
public $num_doors;

/*** the price of the vehicle ***/
public $price;

/*** the shape of the vehicle ***/
public $shape;

/*** the brand of vehicle ***/
public $brand;

/*** the constructor ***/
public function __construct(){
  echo 'About this Vehicle.<br />';
}

/*** define some public methods ***/

/*** a method to show the vehicle price ***/
public function showPrice(){
  echo 'This vehicle costs '.$this->price.'.<br />';
}

/*** a method to show the number of doors ***/
public function numDoors(){
  echo 'This vehicle has '.$this->num_doors.' doors.<br />';
}

/*** method to drive the vehicle ***/
public function drive(){
  echo 'VRRROOOOOOM!!!.<br />';
}
public function brand(){
  echo 'Brand Name : '.$this->brand.' <br />';
}

public function color1(){
echo 'Color of Car :'.$this->color. ' <br />';
}

} /*** end of class ***/

?>