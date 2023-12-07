<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <!-- Título centrado para la sección de búsqueda -->
            <h2 class="mb-4 text-center">Buscar</h2>

            <!-- Formulario de búsqueda que envía datos a la URL especificada mediante el método GET -->
            <form action="<?= base_url('index.php/biblioteca/buscar/'); ?>" method="GET">
                <!-- Campo de entrada para el título del libro o revista-->
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" name="titulo">
                </div>

                <!-- Campo de entrada para el autor del libro o revista -->
                <div class="mb-3">
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo" class="form-control">
                        <option value="" disabled selected>Seleccione uno</option>
                        <option value="Libro">Libro</option>
                        <option value="Revista">Revista</option>
                    </select>
                </div>

                <!-- Botón de envío del formulario -->
                <div class="mb-3">
                    <input type="submit" class="btn btn-success" value="Buscar">
                </div>
            </form>
        </div>
    </div>

    <?php if (isset($bibliotecas)): ?>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <!-- Tabla para mostrar los resultados de la búsqueda -->
                <table class="table">
                    <thead>
                        <th>Título</th>
                        <th>Tipo</th>
                    </thead>
                    <tbody>
                        <!-- Bucle que recorre la variable $biblioteca (presumiblemente un arreglo de objetos) -->
                        <?php foreach ($bibliotecas as $biblioteca): ?>
                            <!-- Fila de datos para cada libro en la variable $biblioteca -->
                            <tr>
                                <!-- Cada celda contiene un atributo del objeto $biblioteca -->
                                <td><?= $biblioteca->titulo ?></td>
                                <td><?= $biblioteca->tipo ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>
</div>