<?php
echo "<h3>While Loop</h3>";
$num = 1;
while ($num <= 5) {
echo "Number: $num <br>";
$num++;
}

echo "<h3>Do-While Loop</h3>";
$x = 1;
do {
echo "Value: $x <br>";
$x++;
} while ($x <= 5);
echo "<h3>Foreach Loop</h3>";
$numbers = array(1, 2, 3, 4, 5);
foreach ($numbers as $n) {
echo "Number: $n <br>";
}
?>