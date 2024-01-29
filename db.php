<?php

$servername = "localhost";
$username = "u196301409_creighton";
$password = "Knoeht6306*";
$database = "u196301409_creighton";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
