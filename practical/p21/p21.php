<?php
echo "-------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate Database Connectivity using MySQL. Establish a connection between PHP and MySQL server and display a successful connection message.<br>";
echo "Name : kreni<br>";
echo "En.no : 24082291080<br>";
echo "-------------------------------------------------------------<br><br>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

echo "Database Connected Successfully!<br>";

mysqli_close($conn);
?>