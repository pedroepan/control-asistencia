<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/crear_usuario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<header class="header_blanco">
    <img class="logo" src="../assets/images/logo-2.png" alt="logo-unimar">
    <a href="dashboard.php"><button class="boton_acceder">Volver</button></a>
</header>
<main class="principal">
    <div class="cajita-crear-usuario">
        <h1 class="enunciado-asistencia">Crear Usuario</h1>
        <?php include '../config/bd.php'; ?>
        <?php include '../config/controlador_crear-usuario.php'; ?>
        
        <form class="formulario" method="post">
            <div class="formulario_campo">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre" required>
            </div>
            <div class="formulario_campo">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" placeholder="Ingrese el apellido" required>
            </div>
            <div class="formulario_campo">
                <label for="correo">Correo Electrónico</label>
                <input type="email" name="correo" id="correo" placeholder="Ingrese el correo electrónico" required>
            </div>
            <div class="formulario_campo">
                <label for="cedula">Cédula</label>
                <input type="text" name="cedula" id="cedula" placeholder="Ingrese la cédula" required>
            </div>
            <div class="formulario_campo">
                <label for="password">Contraseña</label>
                <input type="password" name="contra" id="password" placeholder="Ingrese la contraseña" required>
            </div>
            <div class="formulario_campo formulario_campo-rol">
                <label for="rol">Rol</label>
                <select name="rol" id="rol" placeholder="Seleccionar rol" required>
                    <option value="admin">Jefe</option>
                    <option value="user">Administrador</option>
                    <option value="user">Becario</option>
                </select>
            </div>
            <input name="btncrear_usuario" class="formulario_campo-submit" type="submit" value="Crear Usuario">
        </form>
    </div>
</main>
</body>
</html>