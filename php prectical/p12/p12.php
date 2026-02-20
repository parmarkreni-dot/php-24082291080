<?php
class Car {
public $name;
function __construct($carName) {
$this->name = $carName;
echo "Constructor called. Car Name: " . $this->name . "<br>";
}
function __destruct() {
echo "Destructor called. Object destroyed.";
}
}
$obj = new Car("BMW");
?>