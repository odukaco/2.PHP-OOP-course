<?php
class Car
{
    public  $color;
    public  $weight;
    private  $year;
    private $availableColours=['red','green','blue'];

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setColor($color)
    {
       if(in_array($color,$this->availableColours)){
        $this->color=$color;
       }
    }

    public function getColor()
    {
        return $this->color;
    }

}

$myCar = new Car();
$myCar->setYear(2010);
echo $myCar->getYear();
$myCar->setColor('red');
echo $myCar->getColor();
// echo '<pre>';
// var_dump($myCar);
// echo '</pre>';
