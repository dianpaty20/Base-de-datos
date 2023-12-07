<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Título centrado para la sección de consulta -->
            <h2 class="mb-4 text-center">Consultar</h2>

            <!-- Tabla con estilo de Bootstrap para mostrar la información de los datos -->
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Descripción</th>
                        <th>Fecha de Publicación</th>
                        <th>Páginas</th>
                        <th>Ciudad</th>
                        <th>Editorial</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <!-- Cuerpo de la tabla que contendrá los datos de los libros -->
                <tbody>
                    <!-- Bucle que recorre la variable $biblioteca (presumiblemente un arreglo de objetos) -->
                    <?php foreach ($biblioteca as $biblioteca): ?>
                        <!-- Fila de datos para cada libro en la variable $biblioteca -->
                        <tr>
                            <!-- Cada celda contiene un atributo del objeto $libro -->
                            <td><?= $biblioteca->titulo ?></td>
                            <td><?= $biblioteca->autor ?></td>
                            <td><?= $biblioteca->descripcion ?></td>
                            <td><?= $biblioteca->fecha_publicacion ?></td>
                            <td><?= $biblioteca->paginas ?></td>
                            <td><?= $biblioteca->ciudad ?></td>
                            <td><?= $biblioteca->editorial ?></td>
                            <td><?= $biblioteca->tipo ?></td>

                            <!-- Celda con enlaces para acciones (eliminar y editar) -->
                            <td>    
                                <a href="<?= base_url('biblioteca/delete/' . $biblioteca->id); ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                <a href="<?= base_url('biblioteca/editar/' . $biblioteca->id); ?>" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
