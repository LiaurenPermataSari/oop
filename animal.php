<?php
class Animal{
    public $name;
    public $legs = 4;
    public $cold_blooded= 'false';

    function __construct($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function get_legs(){
        return $this->legs;
    }
    function get_cold_blooded(){
       return $this->cold_blooded;
    }
}
?>