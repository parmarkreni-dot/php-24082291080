<?php
trait Logger {

public function log() {
echo "Logging data<br>";
}
}
trait Auth {
public function login() {
echo "User logged in";
}
}
class User {
use Logger, Auth;
}
$obj = new User();
$obj->log();
$obj->login();
?>