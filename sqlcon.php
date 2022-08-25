<?php
$servername = "192.168.0.254";
$database = "encuesta";
$username = "fgonzalez";
$password = "6bM59%1**t^O";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>