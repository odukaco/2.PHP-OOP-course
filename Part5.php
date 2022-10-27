<?php
class Person
{
    private $phone = 123456;

    public function __construct()
    {
        echo '__construct is called'.PHP_EOL;
    }

    public function __destruct()
    {
        echo '__destruct is called'.PHP_EOL;
    }
}
$p=new Person;
var_dump($p);