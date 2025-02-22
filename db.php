<?php
$host = "localhost";
$user = "root";  // Change if using a different database user
$pass = "";  // Change if you have a password
$db = "user_system";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>