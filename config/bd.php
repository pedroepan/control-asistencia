<?php 

$username = "root";
$bdd = "control_asistencia";
$password = "";
$host = "lochalhost";

$conexion = new mysqli("localhost", "root", "", "control_asistencia", "8080");
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
} else {
 // echo "Connected successfully";
}

$conexion->set_charset("utf8mb4");




