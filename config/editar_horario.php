<?php
include_once 'bd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo = $_POST['codigo'];
    $dia = $_POST['dia'];
    $hora_inicio = $_POST['hora_inicio'];
    $hora_fin = $_POST['hora_fin'];
    $aula = $_POST['aula'];

    // Actualizar los valores en la base de datos
    $stmt = $conexion->prepare("UPDATE materias SET dia = ?, hora_inicio = ?, hora_fin = ?, aula = ? WHERE codigo = ?");
    $stmt->bind_param("sssss", $dia, $hora_inicio, $hora_fin, $aula, $codigo);

    if ($stmt->execute()) {
        // Redirigir con éxito
        header("Location: ../php/unidades_curriculares.php?mensaje=Horario actualizado correctamente");
    } else {
        // Redirigir con error
        header("Location: ../php/unidades_curriculares.php?error=No se pudo actualizar el horario");
    }

    $stmt->close();
    $conexion->close();
}
?>