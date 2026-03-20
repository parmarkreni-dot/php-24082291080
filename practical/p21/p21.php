<?php
echo "<h2>PHP MySQL Database Connection Demo</h2>";


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}


echo "Connected successfully to MySQL database!";


$conn->close();
?>

<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=test_db", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully using PDO!";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>