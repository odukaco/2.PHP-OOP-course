<?php
class Person
{
    private $name;
    private $phone;
    static $counter=0;

    public function __construct(string $name, int $phone)
    {
        $this->name=$name;
        $this->phone=$phone;
        self::$counter++; 
        //echo '__construct is called'.'<br>';
    }

    public function __destruct()
    {
        //echo '__destruct is called'.'<br>';
    }

    public function __toString()
    {
        return"name: $this->name phone: $this->phone".'<br>';
    }

    public function __get($name)
    {
        if ($name === 'default_user'){
            return $this->name.'<br>';
        }
        return "Propety\" $name \"does not exist".'<br>';
    }

    public function __set($name, $value)
    {
        var_dump($name,$value);
    }

    public function __call($name, $arguments)
    {
        if($name==='getMobilePhone'){
            return $this->getPhone();
        } else if ($name==='setMobilePhone'){
            $this->setPhone($arguments[0]);
        }
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($newPhone)
    {
        $this->phone= $newPhone;
    }

    public static function __callStatic($name, $arguments)
    {
        echo "\"$name\" static method was called".'<br>';
    }

    public function __invoke()
    {
        return "Object was returned as a function";
    }

    public function __sleep()
    {
        echo 'I am sleeping'.'<br>';
        unset($this->phone);
        return ['name'];
    }

    public function __wakeup()
    {
        echo 'I am waking up'.'<br>';
    }

    public function __clone()
    {
        self::$counter++;
    }
}
$p=new Person('Michael',123456);
// echo $p;
// echo $p->default_user;
// echo $p->default_user='Marry';
//echo $p->getMobilePhone();
// echo $p->setMobilePhone(11111).'<br>';
// echo $p->getMobilePhone().'<br>';
// Person::hello();
// echo $p().'<br>';
// $pSer = serialize($p);
// echo $pSer.'<br>';
// $pUnser = unserialize($pSer);
// echo '<pre>';
// var_dump($pUnser);
// echo '</pre>';
$newPerson=clone $p;
echo Person::$counter;
