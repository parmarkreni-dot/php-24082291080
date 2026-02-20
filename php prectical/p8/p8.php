<?php
$text = " Welcome to PHP Programming ";
echo "<h3>Original String</h3>";
echo "'" . $text . "'<br><br>";

echo "<b>strlen()</b><br>";
echo "Length of string = " . strlen($text) . "<br><br>";

echo "<b>trim()</b><br>";
echo "After trim = '" . trim($text) . "'<br><br>";

echo "<b>substr()</b><br>";
echo "Substring (0, 7) = " . substr($text, 0, 7) . "<br><br>";

echo "<b>strpos()</b><br>";
echo "Position of 'PHP' = " . strpos($text, "PHP") . "<br>";
?>