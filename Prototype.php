<?php

abstract class Prototype {
    public string $a;
    public string $b;

    public function displayCONS(){
        echo "CONS : {$this->a}\n";
        echo "CONS : {$this->b}\n";
    }

    public function displayCLON(){
        echo "CLON : {$this->a}\n";
        echo "CLON : {$this->b}\n";
    } 
    

    abstract function __clone();
}