<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <!-- Título para la sección de búsqueda de préstamos de libro -->
            <h2 class="mb-4 text-center">Buscar Préstamos</h2>

            <!-- Formulario de búsqueda de préstamos de libro -->
            <form action="<?= base_url('index.php/prestamo/buscar/'); ?>" method="GET">
                <!-- Campo para ingresar el nombre del usuario -->
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">

                <!-- Campo para ingresar la fecha de préstamo -->
                <label for="nombre" class="form-label">Fecha de Préstamo</label>
                <input type="date" class="form-control" name="fechaPrestamo">

                <!-- Botón para enviar el formulario de búsqueda -->
                <input type="submit" class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>

    <?php
    
    if (isset($prestamo)) {
        // Se pueden descomentar las siguientes líneas para imprimir en la consola los resultados
        // print_r($prestamo);
    }
    ?>

    <!-- Mostrar resultados de búsqueda en una tabla -->
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <!-- Encabezados de la tabla -->
                        <th>Nombre</th>
                        <th>Fecha de Préstamo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($prestamo as $prestamo): ?>
                        <!-- Filas de la tabla con datos de préstamos de libro -->
                        <tr>
                            <td><?= $prestamo->nombre ?></td>
                            <td><?= $prestamo->fechaPrestamo ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
