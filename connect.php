<?php
$servername="localhost";
$username="gcu";
$password="123456";
$dbname = "engg";
// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error)
{
    die("Connection Failed: ". $conn->connect_error);
}
echo"Connected successfully!";
$conn->close();
?>