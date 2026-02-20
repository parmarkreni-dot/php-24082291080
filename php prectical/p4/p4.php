<?php
$a = 20;
$b = 10;
$choice = 3; 

echo "<h3>Simple Calculator using Switch-Case</h3>";
echo "Number 1 = $a <br>";
echo "Number 2 = $b <br><br>";

switch ($choice) {
case 1:
echo "Addition = " . ($a + $b);
break;

case 2:
echo "Subtraction = " . ($a - $b);
break;

case 3:

echo "Multiplication = " . ($a * $b);
break;

case 4:
if ($b != 0) {
echo "Division = " . ($a / $b);
} else {
echo "Division not possible (divide by zero)";
}
break;

default:
echo "Invalid Choice";
}

?>