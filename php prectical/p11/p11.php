<?php
class Student {
public $name;
public $age;
function showDetails() {
echo "Student Name: " . $this->name . "<br>";
echo "Student Age: " . $this->age . "<br>";
}
}
$stud1 = new Student();

$stud1->name = "neha";
$stud1->age = 19;
$stud1->showDetails();
?>