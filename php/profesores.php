<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profresores</title>

    <link rel="icon" href="../assets/images/logounimar.png" type="image/png">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/profesores.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>

    <script src="../js/datatable.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <?php include '../includes/header.php'; ?>
    </header>
    <main class="main">
        <section class="main-sidebar">
            <?php include '../includes/sidebar.php'; ?>
        </section>
        <section class="main-contenido__profesores">
            <h4>Profesores</h4>

            <!-- Botón "Nuevo Profesor" visible solo para admin o jefe -->
            <?php if ($userRol === 'admin' || $userRol === 'jefe'): ?>
                <div class="">
                    <button class="btn-nuevoProfesor" onclick="window.location.href='crear_profesor.php'">Nuevo Profesor</button>
                </div>
            <?php endif; ?>
            <!-- Setencia SQL -->
            <?php
            include_once '../config/bd.php';

            $sql = $conexion->query("SELECT codigo, nombre, apellido, correo, cedula, telefono, natalicio FROM profesores");
            ?>

            <div class="container-datatable container w-100">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th id="th_codigo" scope="col">CÓDIGO</th>
                            <th id="th_nombre" scope="col">NOMBRE</th>
                            <th id="th_apellido" scope="col">APELLIDO</th>
                            <th id="th_correo" class="th_encabezado" scope="col">CORREO</th>
                            <th id="th_cedula" scope="col">CÉDULA</th>
                            <th id="th_telefono" scope="col">TELÉFONO</th>
                            <th id="th_natalicio" scope="col">FECHA DE NACIMIENTO</th>
                            <th id="th_botones"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td id="td_codigo"><?= $datos->codigo ?></td>
                                <td id="td_nombre"><?= $datos->nombre ?></td>
                                <td id="td_apellido"><?= $datos->apellido ?></td>
                                <td id="td_correo"><?= $datos->correo ?></td>
                                <td id="td_cedula"><?= $datos->cedula ?></td>
                                <td id="td_telefono"><?= $datos->telefono ?></td>
                                <td id="td_natalicio"><?= $datos->natalicio ?></td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Editar</button>
                                    <button class="btn btn-danger btn-sm">Eliminar</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>

        </section>

    </main>
    <footer>
        <?php include '../includes/footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js/sidebar.js"></script>
</body>

</html>