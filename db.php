<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "employee_db";  // must match phpMyAdmin name

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>