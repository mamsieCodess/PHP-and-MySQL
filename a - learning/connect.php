<?php
//this file is to connect PHP to MySQL

$host = 'localhost';
$user = 'root';
$password = 'root';


$conn = new mysqli($host,$user,$password, 'home');

if ($conn->connect_error){
    die ("Connection failed: " . $conn->connect_error);
}
echo "Sucessfully Connected <br>";


?>

