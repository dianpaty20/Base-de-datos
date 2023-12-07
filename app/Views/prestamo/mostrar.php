<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Título de la página -->
            <h2 class="mb-4 text-center">Consultar Préstamos</h2>

            <!-- Tabla para mostrar información de los préstamos de libros -->
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <!-- Encabezados de la tabla -->
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Edad</th>
                        <th>Título</th>
                        <th>Tipo</th>
                        <th>Fecha de Préstamo</th>
                        <th>Dirección</th>
                        <th>Ocupación</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($prestamo as $prestamo): ?>
                        <!-- Filas de la tabla con información de préstamos de libros -->
                        <tr>
                            <td><?= $prestamo->nombre ?></td>
                            <td><?= $prestamo->apellidoPaterno ?></td>
                            <td><?= $prestamo->apellidoMaterno ?></td>
                            <td><?= $prestamo->edad ?></td>
                            <td><?= $prestamo->titulo ?></td>
                            <td><?= $prestamo->tipo ?></td>
                            <td><?= $prestamo->fechaPrestamo ?></td>
                            <td><?= $prestamo->direccion ?></td>
                            <td><?= $prestamo->ocupacion ?></td>
                            <td><?= $prestamo->telefono ?></td>
                            <td>    
                                <!-- Enlaces para eliminar o editar cada préstamo de libro -->
                                <a href="<?= base_url('prestamo/delete/' . $prestamo->id); ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                <a href="<?= base_url('prestamo/editar/' . $prestamo->id); ?>" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
