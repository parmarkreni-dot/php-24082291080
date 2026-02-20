<?php
class Animal {
public function sound() {
echo "Animal makes a sound";
}
}
class Dog extends Animal {
public function sound() {
echo "Dog barks";
}
}
$obj = new Dog();
$obj->sound();
?>