<?php 
//public , private, protected, static,,,
//access modifier
//public,, can access from any where
//private,, can call only internal class
//protected,, can call only internal , and extends class,
class Products{
    public $item_name="Sprite";
    private $price=200;
    protected $qty=20;
    function info(){
        return $this->price. $this->qty;
    }
}
class Test extends Products{
    function more_test(){
       // return $this->price;
       return $this->qty;
    }
}
$p=new Products();
echo $p->item_name;
//echo $p->price;
echo $p->qty;