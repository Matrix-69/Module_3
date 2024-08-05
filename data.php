<?php
$servername = "localhost";
$username = "sem2";
$password = "123456";
$database = "student";
$conn = new mysqli($servername, $username, $password, $database);
if($conn->connect-error)
{
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>