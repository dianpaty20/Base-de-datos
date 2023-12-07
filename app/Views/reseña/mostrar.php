<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Encabezado con el título de la sección -->
            <h2 class="mb-4 text-center">Consultar Reseñas</h2>
            <!-- Tabla para mostrar las reseñas -->
            <table class="table table-bordered table-striped">
                <!-- Encabezados de la tabla con estilo oscuro -->
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Título</th>
                        <th>Tipo</th>
                        <th>Calificación</th>
                        <th>Comentario</th>
                        <th>Fecha de Reseña</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reseña as $reseña): ?>
                        <!-- Filas de la tabla con datos de cada reseña -->
                        <tr>
                            <td><?= $reseña->nombre ?></td>
                            <td><?= $reseña->apellidoPaterno ?></td>
                            <td><?= $reseña->apellidoMaterno ?></td>
                            <td><?= $reseña->titulo ?></td>
                            <td><?= $reseña->tipo ?></td>
                            <td><?= $reseña->calificacion ?></td>
                            <td><?= $reseña->comentario ?></td>
                            <td><?= $reseña->fechaReseña ?></td>
                            <!-- Celdas con enlaces para eliminar o editar la reseña -->
                            <td>    
                                <a href="<?= base_url('reseña/delete/' . $reseña->id); ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                <a href="<?= base_url('reseña/editar/' . $reseña->id); ?>" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
