<?php

if (!empty($_POST["btncrear_profesor"])) {
    if (empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["correo"]) || empty($_POST["cedula"]) || empty($_POST["natalicio"])) {
        $error = "Por favor, complete todos los campos.";
    } else {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $cedula = $_POST["cedula"];
        $telefono = $_POST["telefono"];
        $natalicio = $_POST["natalicio"];
        // Verificar si ya existe un profesor con el mismo correo o cédula
        $verificar = $conexion->query("SELECT * FROM usuarios WHERE correo='$correo' OR cedula='$cedula'");
        if ($verificar->num_rows > 0) {
            echo 'Error: Ya existe un profesor con el mismo correo o cédula.';
        } else {
            // Insertar el nuevo usuario si no hay duplicados
            $sql = $conexion->query("INSERT INTO profesores (codigo, cedula, nombre, apellido, correo, telefono, natalicio) VALUES (CAST(FLOOR(100000 + RAND() * 900000) AS CHAR),'$cedula', '$nombre', '$apellido', '$correo', '$telefono', '$natalicio')");
            echo 'Profesor registrado correctamente';
            
        }
    }
}