<?php
    class Ape extends Animal{
        public $name;
        public $legs=2;
        public $yell='Auoo';
        function __construct($name){
            $this->name = $name;
            echo "{$this->name}<br>";
        }
        function legs(){
            echo "{$this->legs}<br>";
        }
        function yell(){
            echo "{$this->yell}<br><br>";
        }
    }
?>
