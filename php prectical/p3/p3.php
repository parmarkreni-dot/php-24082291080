<?php
$marks = 65;

echo "<h3>Result using if-else and elseif ladder</h3>";

if ($marks >= 75) {
echo "Grade: Distinction<br>";
} elseif ($marks >= 60) {
echo "Grade: First Class<br>";
} elseif ($marks >= 50) {
echo "Grade: Pass<br>";
} else {
echo "Grade: Fail<br>";
}
echo "<br>";
$day = 3;
echo "<h3>Day using switch-case</h3>";

switch ($day) {
case 1:
echo "Monday";
break;
case 2:
echo "Tuesday";
break;
case 3:
echo "Wednesday";
break;
case 4:
echo "Thursday";
break;
case 5:
echo "Friday";
break;
default:
echo "Invalid Day";
}

?>