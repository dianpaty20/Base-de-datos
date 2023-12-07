<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Título para la sección de consulta de multas de libros -->
            <h2 class="mb-4 text-center">Consultar Multas</h2>
            
            <!-- Tabla para mostrar las multas de libros con estilo de Bootstrap -->
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <!-- Encabezados de la tabla -->
                    <tr>
                        <th>Nombre del Cliente</th>
                        <th>Título</th>
                        <th>Tipo</th>
                        <th>Fecha de Salida</th>
                        <th>Fecha de Entrega</th>
                        <th>Días de Retraso</th>
                        <th>Pago de Multa</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Itera sobre las multas de libros y muestra cada fila en la tabla -->
                    <?php foreach ($multa as $multa): ?>
                        <tr>
                            <td><?= $multa->nombreCliente ?></td>
                            <td><?= $multa->titulo ?></td>
                            <td><?= $multa->tipo ?></td>
                            <td><?= $multa->fechaSalida ?></td>
                            <td><?= $multa->fechaEntrega ?></td>
                            <td><?= $multa->diasRetraso ?></td>
                            <td><?= $multa->pagoMulta ?></td>
                            <td>    
                                <!-- Botones de acción para eliminar y editar cada multa de libro -->
                                <a href="<?= base_url('multa/delete/' . $multa->id); ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                <a href="<?= base_url('multa/editar/' . $multa->id); ?>" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
