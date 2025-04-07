<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear profesor</title>

    <link rel="icon" href="../assets/images/logounimar.png" type="image/png">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/crear_usuario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<header class="header_blanco">
    <img class="logo" src="../assets/images/logo-2.png" alt="logo-unimar">
    <a href="profesores.php"><button class="boton_acceder">Volver</button></a>
</header>
<main class="principal">
    <div class="cajita-crear-usuario">
        <h1 class="enunciado-asistencia">Nuevo Profesor</h1>
        <?php include '../config/bd.php'; ?>
        <?php include '../config/controlador_crear-profesor.php'; ?>
        
        
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
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" id="felefono" placeholder="Ingrese el teléfono" required>
            </div>
            <div class="formulario_campo">
                <label for="natalicio">Fecha de nacimiento</label>
                <input type="date" name="natalicio" id="natalicio"  required>
            </div>
            <input id="btncrear_profesor" name="btncrear_profesor" class="formulario_campo-submit" type="submit" value="Registrar Profesor">
        </form>
    </div>
</main>
</body>
</html>