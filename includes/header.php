<?php
include_once '../config/bd.php';
session_start();
$userName = isset($_SESSION['username']) ? $_SESSION['username'] : 'Invitado';
$userApellido = isset($_SESSION['apellido']) ? $_SESSION['apellido'] : '';
$userRol = '';

if (isset($_SESSION['correo'])) { // Usar el correo electrónico único
    $userEmail = $_SESSION['correo']; // Corregir el nombre del campo de sesión
    // Consultar el rol del usuario desde la base de datos
    $stmt = $conexion->prepare("SELECT rol FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $userEmail);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userRol = $row['rol'];
    }
    $stmt->close();
}
?>

<header class="header_azul">
    <img src="../assets/images/logo-4.png" alt="Logo">
    <div class="user-info">
        <button onclick="window.location.href='../index.php'">Registrar Asistencia</button>
        <?php if ($userRol === 'admin' || $userRol === 'jefe'): // Mostrar el botón solo si el rol es admin o jefe ?>
            <button onclick="window.location.href='crear_usuario.php'">Crear Usuario</button>
        <?php endif; ?>
        <div class="header_azul-usuario">
            <i class="header_azul-usuario-icon fa-solid fa-circle-user"></i>
            <span class="header_azul-usuario-span"><?php echo htmlspecialchars($userName . ' ' . $userApellido); ?></span>
        </div>  
    </div>
</header>
