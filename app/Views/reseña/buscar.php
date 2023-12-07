<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <!-- Encabezado con el título del formulario de búsqueda -->
            <h2 class="mb-4 text-center">Buscar Reseñas</h2>
            <!-- Formulario de búsqueda que se enviará a la URL especificada cuando se envíe -->
            <form action="<?= base_url('index.php/reseña/buscar/'); ?>" method="GET">
                <!-- Campo para ingresar el nombre -->
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
                <!-- Campo para ingresar la calificación -->
                <label for="calificacion" class="form-label">Calificación</label>
                <input type="number" class="form-control" name="calificacion">
                <!-- Botón para enviar el formulario de búsqueda -->
                <input type="submit" class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>

    <?php
    // Verificar si hay resultados de búsqueda
    if (isset($reseña)) { // Se puede imprimir o procesar los resultados de búsqueda aquí
    }
    ?>

    <!-- Mostrar los resultados de búsqueda en una tabla -->
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Calificación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reseña as $reseña): ?>
                        <tr>
                            <!-- Mostrar datos de cada reseña en la tabla -->
                            <td><?= $reseña->nombre ?></td>
                            <td><?= $reseña->calificacion ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
