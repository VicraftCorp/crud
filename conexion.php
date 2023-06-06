<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "crud"; 


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo ("Error de conexión: " . mysqli_connect_error());
}


mysqli_set_charset($conn, "utf8mb4");

?>
