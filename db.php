<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "bank";

$conn = mysqli_connect($servername, $username, $password, $database) or die(mysqli_error($conn));

?>