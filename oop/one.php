<?php 
class Car{
    public $brand="Honda";
    public function info(){
        return "I am info";
    }
}
//inheritance
class Smallcar extends Car{
    function more_info()
    {
        return $this->brand.$this->info();
    }
}
$sm=new Smallcar();
echo $sm->brand;
echo $sm->info();