<?php
abstract class Shape
{
    public $color;
    public function __construct($color)
    {
        $this->color=$color;
    }

    abstract public function getArea():float;
    
    public function getColor()
    {
        return $this->color;
    }
}
class Triangle extends Shape
{
    public $base;
    public $height;

    public function __construct($color,$base,$height)
    {
        parent::__construct($color);
        $this->height=$height;
        $this->base=$base;
    }

    public function getArea(): float
    {
        return ($this->base*$this->height)/2;
    }
}
class Circle extends Shape
{
    public $radius;

    public function __construct($color,$radius)
    {
        parent::__construct($color);
        $this->radius=$radius;
    }

    public function getArea():float
    {
        return $this->radius*$this->radius*3.14;
    }
}
class Rectangle extends Shape
{
    public $width;
    public $lenght;

    public function __construct($color,$width,$lenght)
    {
        parent::__construct($color);
        $this->width=$width;
        $this->lenght=$lenght;
    }

    public function getArea(): float
    {
        return $this->width*$this->lenght;
    }
}
$t=new Triangle('red',5,5);
$c=new Circle('green',3);
$r=new Rectangle('blue',5,5);
echo $c->getArea();