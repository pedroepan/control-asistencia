<?php
session_start();
$userName = isset($_SESSION['username']) ? $_SESSION['username'] : 'Invitado';
$userApellido = isset($_SESSION['apellido']) ? $_SESSION['apellido'] : '';
?>

<header class="header_azul">
    <img src="../assets/images/logo-4.png" alt="Logo">
    <div class="user-info">
        <button onclick="window.location.href='../index.php'">Registrar Asistencia</button>
        <div class="header_azul-usuario">
            <i class="header_azul-usuario-icon fa-solid fa-circle-user"></i>
            <span class="header_azul-usuario-span"><?php echo htmlspecialchars($userName . ' ' . $userApellido); ?></span>
        </div>  
    </div>
</header>
