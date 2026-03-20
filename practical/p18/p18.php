<?php

session_start();

echo "<h2>PHP Session Management Demo</h2>";


echo "<h3>1. Creating Session Variables</h3>";
$_SESSION["username"] = "Kreni";
$_SESSION["course"] = "IT";
echo "Session variables created.<br>";


echo "<h3>2. Accessing Session Variables</h3>";
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Course: " . $_SESSION["course"] . "<br>";


echo "<h3>3. Checking Session Variables</h3>";
if (isset($_SESSION["username"])) {
    echo "Username session exists.<br>";
} else {
    echo "Username session does not exist.<br>";
}


echo "<h3>4. Modifying Session Variables</h3>";
$_SESSION["course"] = "Computer Engineering";
echo "Updated Course: " . $_SESSION["course"] . "<br>";


echo "<h3>5. Displaying All Session Data</h3>";
print_r($_SESSION);


echo "<h3>6. Destroying Session</h3>";
session_unset();     
session_destroy();   

echo "Session destroyed.<br>";
?>