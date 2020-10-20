<?php 

class ConcretePrototype extends Prototype{
    public function __construct(){
        $this->a = "A1";
        $this->b = "B1";

        $this->displayCONS();
    }

    function __clone(){
        $this->displayCLON();
    }
}