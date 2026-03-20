<?php

echo "-------------------------------------------------------------<br>";
echo "Develop a CRUD (Create, Read, Update, Delete) application using PHP and MySQL to demonstrate database connectivity, form handling, and dynamic data management.<br>";
echo "Name : kreni<br>";
echo "En.no : 24082291080<br>";
echo "-------------------------------------------------------------<br><br>";

$servername = "localhost";
$username = "root";
$password = "";
$database = "test"; 

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database connected successfully!";

?>