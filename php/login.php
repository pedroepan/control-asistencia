<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<header class="header_blanco">
        <img class="logo" src="../assets\images\logo-2.png" alt="logo-unimar">
        <a href="../index.php"><button class="boton_acceder">Registrar Asistencia</button></a>
    </header>
    <main class="principal">
        <div class="cajita">
        <h1 class="enunciado-asistencia">Control de<br>asistencia</h1>
        <?php include '../config/bd.php'; ?>
        <?php include '../config/controlador_login.php'; ?>
            <form class="formulario" method="post">
                <div class="formulario_campo formulario_usuario">
                    <label for="username">Correo Electrónico</label>
                    <input type="text" name="correo" id="username" placeholder="Ingrese su correo electrónico" required>
                </div>
                <div class="formulario_campo formulario_password">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" placeholder="Ingrese su contraseña" id="password" required>
                </div>
                <input class="formulario_campo-submit" type="submit" name="btniniciar_sesion" value="Iniciar Sesión">
            </form>
        </div>
        
    </main>
</body>
</html>