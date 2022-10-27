<?php
class Car2
{
    private $color = 'red';
    private $weight = 2000;

    public function __construct($color,$weight)
    {
        $this->color = $color;
        $this->weight= $weight;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function __destruct()
    {
        echo 'I am now destroyed'.$this->color;
    }

}

$myCar=new Car2('green',2001);
$myCar2=new Car2('blue',2500);
// echo '<pre>';
// var_dump($myCar);
// echo '</pre>';
// echo '<pre>';
// var_dump($myCar2);
// echo '</pre>';
echo $myCar->getColor().PHP_EOL;
echo $myCar2->getColor().PHP_EOL;
