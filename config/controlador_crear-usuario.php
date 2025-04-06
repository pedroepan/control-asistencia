<?php
if (!empty($_POST["btncrear_usuario"])) {
    if (empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["correo"]) || empty($_POST["cedula"]) || empty($_POST["contra"]) || empty($_POST["rol"])) {
        $error = "Por favor, complete todos los campos.";
    } else {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $cedula = $_POST["cedula"];
        $contrasena = $_POST["contra"];
        $rol = $_POST["rol"];
        // Verificar si ya existe un usuario con el mismo correo o cédula
        $verificar = $conexion->query("SELECT * FROM usuarios WHERE correo='$correo' OR cedula='$cedula'");
        if ($verificar->num_rows > 0) {
            echo 'Error: Ya existe un usuario con el mismo correo o cédula.';
        } else {
            // Insertar el nuevo usuario si no hay duplicados
            $sql = $conexion->query("INSERT INTO usuarios (nombre, apellido, correo, cedula, contra, rol) VALUES ('$nombre', '$apellido', '$correo', '$cedula', '$contrasena', '$rol')");
            echo 'Usuario creado correctamente';
            
        }
    }
}