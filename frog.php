<?php
    class Frog extends Animal{
        public $name;
        public $jump='hop hop';
        function __construct($name){
            $this->name = $name;
            echo "{$this->name}<br>";
        }
        function legs(){
            echo "{$this->legs}<br>";
        }
        function jump(){
            echo "{$this->jump}.<br><br>";
        }
    }
?>