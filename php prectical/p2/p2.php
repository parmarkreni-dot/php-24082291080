<?php
define("PI", 3.14);
define("TAX", 5);

$a = 20;
$b = 10;

$sum = $a + $b;
$diff = $a - $b;
$product = $a * $b;
$division = $a / $b;
$remainder = $a % $b;

echo "Value of constant PI: " . PI . "<br>";
echo "Value of constant TAX: " . TAX . "%<br><br>";

echo "Addition: $a + $b = $sum <br>";
echo "Subtraction: $a - $b = $diff <br>";

echo "Multiplication: $a * $b = $product <br>";
echo "Division: $a / $b = $division <br>";
echo "Modulus: $a % $b = $remainder <br>";
?>