<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Asistencia UNIMAR</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<header class="header_blanco">
        <img class="logo" src="assets\images\logo-2.png" alt="logo-unimar">
        <a href="php/dashboard.php"><button class="boton_acceder">Volver</button></a>
    </header>
    <main class="principal">
        <div class="cajita">
            <p class="fecha" id="fecha"></p>
            <div class="reloj" id="reloj"></div>
            <hr>
            <h1 class="enunciado-asistencia">Registre su<br>asistencia</h1>
            <input class="input" type="text" name="codigo" id="" placeholder="CÓDIGO">
            <div class=cajita-submits>
                <input type="submit" value="Entrada" class="boton cajita-submits_submit"></input>
                <input type="submit" value="Salida" class="boton cajita-submits_submit"></input>
            </div>
            
        </div>
        
    </main>
    
    
    <script src="js\script.js"></script>
</body>
</html>