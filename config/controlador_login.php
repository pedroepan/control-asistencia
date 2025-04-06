<?php
session_start();
include 'bd.php'; // Include the database connection file

 if (!empty($_POST['btniniciar_sesion'])) {
    if (empty($_POST['correo']) || empty($_POST['password'])) {
        echo 'Por favor, complete todos los campos.';
    } else {
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        // Consultar las credenciales del usuario
        $sql = $conexion->query("SELECT * FROM usuarios WHERE correo='$correo' AND contra='$password'");
        if ($datos = $sql->fetch_object()) {
            // Guardar datos del usuario en la sesión
            $_SESSION['username'] = $datos->nombre;
            $_SESSION['apellido'] = $datos->apellido;
            $_SESSION['correo'] = $datos->correo; // Guardar el correo electrónico
            $_SESSION['rol'] = $datos->rol; // Guardar el rol del usuario

            // Redirigir al dashboard
            header("Location: ../php/dashboard.php");
        } else {
            echo 'Usuario o contraseña incorrectos.';
        }
    }
}