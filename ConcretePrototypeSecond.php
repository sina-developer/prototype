<?php 

class ConcretePrototypeSecond extends Prototype{
    public function __construct(){
        $this->a = "A2";
        $this->b = "B2";

        $this->displayCONS();
    }

    function __clone(){
        $this->displayCLON();
    }
}