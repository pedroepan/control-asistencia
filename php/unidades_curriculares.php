<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidades curriculares</title>

    <link rel="icon" href="../assets/images/logounimar.png" type="image/png">
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/unidades_curriculares.css">

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
        <section class="main-contenido__unidades-curriculares">
            <h4>Unidades curriculares</h4>

            <!-- Setencia SQL -->
            <?php
            include_once '../config/bd.php';

            $sql = $conexion->query("SELECT id, codigo, nombre, seccion, dia, hora_inicio, hora_fin, aula FROM materias");
            ?>

            <div class="container-datatable container w-100">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th id="th_codigo" scope="col">CÓDIGO</th>
                            <th id="th_nombre" scope="col">NOMBRE</th>
                            <th id="th_seccion" scope="col">SECCIÓN</th>
                            <th id="th_dia" class="th_encabezado" scope="col">DÍA</th>
                            <th id="th_inicio" scope="col">INICIO</th>
                            <th id="th_fin" scope="col">FIN</th>
                            <th id="th_aula" scope="col">AULA</th>
                            <th id="th_botones"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td id="td_codigo"><?= $datos->codigo ?></td>
                                <td id="td_nombre"><?= $datos->nombre ?></td>
                                <td id="td_apellido"><?= $datos->seccion ?></td>
                                <td id="td_correo"><?= $datos->dia ?></td>
                                <td id="td_cedula"><?= $datos->hora_inicio ?></td>
                                <td id="td_telefono"><?= $datos->hora_fin ?></td>
                                <td id="td_natalicio"><?= $datos->aula ?></td>
                                <td>
                                    <button
                                        class="btn btn-primary btn-sm btn-editar-horario"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editarHorarioModal"
                                        data-codigo="<?= $datos->codigo ?>"
                                        data-dia="<?= $datos->dia ?>"
                                        data-hora_inicio="<?= $datos->hora_inicio ?>"
                                        data-hora_fin="<?= $datos->hora_fin ?>"
                                        data-aula="<?= $datos->aula ?>">
                                        Editar horario
                                    </button>
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
    <!-- Modal para editar horario -->
    <div class="modal fade" id="editarHorarioModal" tabindex="-1" aria-labelledby="editarHorarioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"> <!-- Cambiar a modal-lg para hacerlo más grande -->
            <div class="modal-content">
                <form id="formEditarHorario" method="post" action="../config/editar_horario.php">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editarHorarioModalLabel">Editar Horario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="codigo" id="codigo"> <!-- Campo oculto para el código -->
                        <div class="mb-3">
                            <label for="dia" class="form-label">Día</label>
                            <input type="text" class="form-control" id="dia" name="dia" required>
                        </div>
                        <div class="mb-3">
                            <label for="hora_inicio" class="form-label">Hora de Inicio</label>
                            <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" required>
                        </div>
                        <div class="mb-3">
                            <label for="hora_fin" class="form-label">Hora de Fin</label>
                            <input type="time" class="form-control" id="hora_fin" name="hora_fin" required>
                        </div>
                        <div class="mb-3">
                            <label for="aula" class="form-label">Aula</label>
                            <input type="text" class="form-control" id="aula" name="aula" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
        const botonesEditar = document.querySelectorAll('.btn-editar-horario');
        const modalCodigo = document.getElementById('codigo');
        const modalDia = document.getElementById('dia');
        const modalHoraInicio = document.getElementById('hora_inicio');
        const modalHoraFin = document.getElementById('hora_fin');
        const modalAula = document.getElementById('aula');

        botonesEditar.forEach(boton => {
            boton.addEventListener('click', () => {
                modalCodigo.value = boton.getAttribute('data-codigo');
                modalDia.value = boton.getAttribute('data-dia');
                modalHoraInicio.value = boton.getAttribute('data-hora_inicio');
                modalHoraFin.value = boton.getAttribute('data-hora_fin');
                modalAula.value = boton.getAttribute('data-aula');
            });
        });
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js/sidebar.js"></script>
</body>

</html>