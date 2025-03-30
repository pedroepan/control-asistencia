<?php
session_start();
include 'bd.php'; // Include the database connection file

 if (!empty($_POST['btniniciar_sesion'])) {
    if (empty($_POST['correo']) || empty($_POST['password'])) {
        echo 'Por favor, complete todos los campos.';
    } else {
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $sql = $conexion->query("SELECT * FROM usuarios WHERE correo='$correo' AND contra='$password' ");
        if ($datos=$sql->fetch_object()) {
            // Guarda el nombre y apellido en la sesión
            $_SESSION['username'] = $datos->nombre;
            $_SESSION['apellido'] = $datos->apellido;
            header("Location: ../php/dashboard.php");
        } else {
            echo 'Usuario o contraseña incorrectos.';
        }
        
    }
}