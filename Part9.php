<?php
trait MyTrait
{
    public function fly()
    {
        echo 'I am flying';
    }

    public function hello()
    {
        echo 'I can fly';
    }
}

trait EngineTrait
{
    public function hello()
    {
        echo 'I have an engine';
    }
}

class Plane
{
    use MyTrait,EngineTrait{MyTrait::hello insteadof EngineTrait;
        EngineTrait::hello as engineHello;
        }
}
class Helicopter
{
    use MyTrait,EngineTrait{MyTrait::hello insteadof EngineTrait;
    EngineTrait::hello as engineHello;
    }

}
$h=new Helicopter();
echo $h->hello().'<br>';
echo $h->engineHello();


trait trait1
{
    public function method1()
    {
        echo 'foo';
    }
}

trait trait2
{
    public function method2()
    {
        echo 'bar';
    }
}
trait trait3
{
    use trait1,trait2;
    public function method3()
    {
        echo '3';
    }
}
class class1
{
    use trait3;
}
$c=new class1();