<?php
class Car
{
    public  $color= 'red';
    public  $weight=2000;
    static private $availableColours=['red','green','blue'];
    static $counter = 0;

    public function __construct()
    {
        self::$counter++;
    }

    public static function getAvailableColors()
    {
        var_dump(self::$availableColours);
    }
}
$myCar=new Car();
$myCar=new Car();
echo Car::getAvailableColors();
echo Car::$counter;
