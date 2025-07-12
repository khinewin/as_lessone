<?php 
class Car{
    function __destruct()//destructor
    {
        echo " i am desctructor";
    }
    public function test(){
        return " i m test";
    }
    function __construct() //constructor
    {
        echo "i am construct";
    }
}

$c=new Car();
echo $c->test();
