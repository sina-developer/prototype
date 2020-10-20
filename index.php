<?php 

require("./autoload.php");


$cP1 = new ConcretePrototype();
$cP2 = new ConcretePrototypeSecond();
$cP2C = clone $cP2;