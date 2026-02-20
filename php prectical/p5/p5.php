<?php
echo "<h3>Multiplication Table of 5</h3>";
for($i = 1; $i <= 10; $i++){
echo "5 x $i = " . (5 * $i) . "<br>";
}

echo "<h3>Number Pattern</h3>";
for($i = 1; $i <= 5; $i++){
for($j = 1; $j <= $i; $j++){
echo $j . " ";
}
echo "<br>";
}

?>