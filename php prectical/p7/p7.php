<?php
function addNumbers($a, $b) {
$sum = $a + $b;
return $sum; // returning value
}
$result = addNumbers(10, 20);
echo "The sum of 10 and 20 is: " . $result . "<br>";

function greet($name) {
return "Hello, " . $name . "!";
}
echo greet("mahi");
?>