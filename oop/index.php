<?php 
//object oriented programming
class Car{
    //property
    //public
   public $wheels=4;
   public $seats=5;
   public $brand="Honda";
   //methods, public
   public function info(){
        return "Car has $this->wheels wheels and $this->seats Seasts";
   }
   public function more_info(){
        return $this->info(). "and Brand is $this->brand ";
   }
}
$car=new Car(); //Object
echo $car->info();
echo "<br>";
echo $car->more_info();
//dart operator


