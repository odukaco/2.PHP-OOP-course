<?php

use Car as GlobalCar;

class Car
{
    public $color;
    public $manufacturer;

    const MY_CONSTANT=[];

    public function __construct($color,$manufacturer)
    {
        $this->color=$color;
        $this->manufacturer=$manufacturer;
    }

}
$myCar= new Car('red', 'mitsubishi');
Car::MY_CONSTANT;
echo '<pre>';
var_dump($myCar);
echo '</pre>';