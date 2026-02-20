<?php
class Student {
private $name;
private $rollNo;
public function setData($n, $r) {
$this->name = $n;
$this->rollNo = $r;

}
public function getData() {
echo "Name: " . $this->name . "<br>";
echo "Roll No: " . $this->rollNo;
}
}
$obj = new Student();
$obj->setData("vihan", 101);
$obj->getData();
?>