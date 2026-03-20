<?php
echo "<h2>PHP Cookie Management Demo</h2>";


echo "<h3>1. Creating Cookies</h3>";
setcookie("username", "Kreni", time() + 3600); 
setcookie("course", "IT", time() + 3600);
echo "Cookies are set. (Refresh page to access them)<br>";


echo "<h3>2. Accessing Cookies</h3>";
if (isset($_COOKIE["username"])) {
    echo "Username: " . $_COOKIE["username"] . "<br>";
    echo "Course: " . $_COOKIE["course"] . "<br>";
} else {
    echo "Cookies not available yet. Please refresh the page.<br>";
}


echo "<h3>3. Checking Cookie Existence</h3>";
if (isset($_COOKIE["username"])) {
    echo "Username cookie exists.<br>";
} else {
    echo "Username cookie does not exist.<br>";
}


echo "<h3>4. Modifying Cookie</h3>";
setcookie("course", "Computer Engineering", time() + 3600);
echo "Cookie 'course' modified. (Refresh to see changes)<br>";


echo "<h3>5. Deleting Cookie</h3>";
setcookie("username", "", time() - 3600); 
echo "Cookie 'username' deleted.<br>";

?>