<!-- filepath: c:\laragon\www\ControlAsistencia\config\logout.php -->
<?php
session_start(); // Inicia la sesión
session_destroy(); // Destruye todas las variables de sesión
header("Location: ../php/login.php"); // Redirige al usuario a la página de inicio de sesión
exit(); // Asegura que no se ejecute más código después de la redirección