<?php
class ParentClass
{
    public $property1= '1';
    protected $property2= '2';
    private $property3= '3';

    public function get_property2()
    {
        return $this->property2;
    }
}
class ChildClass extends ParentClass
{
    public $property1= '11';
    protected $property2= '22';
    public function get_property2()
    {
        $result = parent::get_property2();
        return "something".$result;
    }
}
$obj= new ChildClass();
echo $obj->get_property2();