<?php
$students = array(
"henil" => 85,
"mayank" => 72,
"ruchi"=> 90,
"viyan" => 78
);

echo "<h3>Original Associative Array</h3>";
foreach ($students as $name => $marks) {
echo $name . " : " . $marks . "<br>";
}
echo "<br>";

asort($students);
echo "<h3>Array after asort() (Sort by Values)</h3>";
foreach ($students as $name => $marks) {
echo $name . " : " . $marks . "<br>";
}
echo "<br>";

ksort($students);
echo "<h3>Array after ksort() (Sort by Keys)</h3>";
foreach ($students as $name => $marks) {
echo $name . " : " . $marks . "<br>";
}
?>