<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <!-- Tarjeta que contiene el formulario para editar libros o revistas -->
            <div class="card">
                <div class="card-header bg-success text-white">
                    <!-- Título centrado para la sección de edición de datos -->
                    <h2 class="mb-4 text-center">Editar</h2>
                </div>

                <div class="card-body">
                    <!-- Formulario que envía datos a la URL de actualización mediante el método POST -->
                    <form action="<?= base_url('biblioteca/update'); ?>" method="POST">
                        <?= csrf_field() ?>

                        <!-- Campo oculto para almacenar el ID del libro o revista que se está editando -->
                        <input type="hidden" name="id" value="<?= $biblioteca->id ?>" />

                        <!-- Campo de entrada para el título del libro o revista con valor predefinido -->
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" value="<?= $biblioteca->titulo ?>">
                        </div>

                        <!-- Campo de entrada para el autor del libro o revista con valor predefinido -->
                        <div class="mb-3">
                            <label for="autor" class="form-label">Autor</label>
                            <input type="text" class="form-control" name="autor" id="autor" value="<?= $biblioteca->autor ?>">
                        </div>

                        <!-- Área de texto para la descripción del libro o revista con valor predefinido -->
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" name="descripcion" id="descripcion"><?= $biblioteca->descripcion ?></textarea>
                        </div>

                        <!-- Campo de entrada para la fecha de publicación con valor predefinido -->
                        <div class="mb-3">
                            <label for="fecha_publicacion" class="form-label">Fecha de Publicación</label>
                            <input type="date" class="form-control" name="fecha_publicacion" id="fecha_publicacion" value="<?= $biblioteca->fecha_publicacion ?>">
                        </div>

                        <!-- Campo de entrada para el número de páginas con valor predefinido -->
                        <div class="mb-3">
                            <label for="paginas" class="form-label">Páginas</label>
                            <input type="number" class="form-control" name="paginas" id="paginas" value="<?= $biblioteca->paginas ?>">
                        </div>

                        <!-- Campo de entrada para la ciudad con valor predefinido -->
                        <div class="mb-3">
                            <label for="ciudad" class="form-label">Ciudad</label>
                            <input type="text" class="form-control" name="ciudad" id="ciudad" value="<?= $biblioteca->ciudad ?>">
                        </div>

                        <!-- Campo de entrada para la editorial con valor predefinido -->
                        <div class="mb-3">
                            <label for="editorial" class="form-label">Editorial</label>
                            <input type="text" class="form-control" name="editorial" id="editorial" value="<?= $biblioteca->editorial ?>">
                        </div>

                        <!-- Campo de entrada para el tipo con valor predefinido -->
                        <div class="mb-3">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" class="form-control">
                                <?php if($biblioteca->tipo == "Libro"): ?>
                                <option value="Libro" selected>Libro</option>
                                <option value="Revista" >Revista</option>
                                <?php else: ?>
                                <option value="Libro" >Libro</option>
                                <option value="Revista" selected>Revista</option>
                                <?php endif ?>
                            </select>
                        </div>

                        <!-- Botón de envío del formulario para guardar los cambios -->
                        <div class="mb-3 text-center">
                            <input type="submit" class="btn btn-success" value="Guardar Cambios">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>