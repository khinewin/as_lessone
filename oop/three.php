<?php 
//static
class Animal{
    static $name="Aung Net";
    static function test_one(){
        return "static function";
    }   
}
echo Animal::$name;
echo Animal::test_one();
