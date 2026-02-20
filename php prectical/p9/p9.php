<?php
$numbers = array(10, 20, 30, 40, 50);
echo "<h3>Original Array:</h3>";
print_r($numbers);
echo "<br><br>";

$numbers[] = 60; 
echo "<h3>After Adding 60:</h3>";
print_r($numbers);
echo "<br><br>";

unset($numbers[2]); 
echo "<h3>After Removing Element at Index 2:</h3>";
print_r($numbers);
echo "<br><br>";

sort($numbers);
echo "<h3>After Sorting:</h3>";
print_r($numbers);
echo "<br><br>";
?>