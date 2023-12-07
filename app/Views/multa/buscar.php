<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <!-- Título para la sección de búsqueda -->
            <h2 class="mb-4 text-center">Buscar Multas</h2>
            
            <!-- Formulario de búsqueda que envía datos a la URL de búsqueda mediante el método GET -->
            <form action="<?= base_url('index.php/multa/buscar'); ?>" method="GET">
                <label for="nombre" class="form-label">Nombre de Cliente</label>
                <input type="text" class="form-control" name="nombreCliente">
                
                <label for="nombre" class="form-label">Pago de Multa</label>
                <input type="text" class="form-control" name="pagoMulta">
                
                <!-- Botón de envío del formulario de búsqueda -->
                <input type="submit" class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>

    <?php
    // Verifica si hay resultados de búsqueda para mostrar
    if (isset($multa)) {
    ?>
    <!-- Sección para mostrar los resultados de la búsqueda -->
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">
            <!-- Tabla para mostrar los resultados de la búsqueda -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre de Cliente</th>
                        <th>Pago de Multa</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Itera sobre los resultados y muestra cada multa de libro -->
                    <?php foreach ($multa as $multa): ?>
                        <tr>
                            <td><?= $multa->nombreCliente ?></td>
                            <td><?= $multa->pagoMulta ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    }
    ?>
</div>
