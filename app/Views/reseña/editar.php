<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <!-- Encabezado de la tarjeta con el título del formulario -->
                    <h4 class="mb-0 text-center">Editar Reseña</h4>
                </div>
                <div class="card-body">
                    <!-- Formulario de edición que se enviará a la URL especificada cuando se envíe -->
                    <form action="<?= base_url('reseña/update'); ?>" method="POST">
                        <?= csrf_field() ?>
                        <!-- Campo oculto para enviar el ID de la reseña -->
                        <input type="hidden" name="id" value="<?= $reseña->id ?>" />

                        <!-- Campo para editar el nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $reseña->nombre ?>">
                        </div>

                        <!-- Campo para editar el apellido paterno -->
                        <div class="mb-3">
                            <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" name="apellidoPaterno" id="apellidoPaterno" value="<?= $reseña->apellidoPaterno ?>">
                        </div>

                        <!-- Campo para editar el apellido materno -->
                        <div class="mb-3">
                            <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" name="apellidoMaterno" id="apellidoMaterno" value="<?= $reseña->apellidoMaterno ?>">
                        </div>

                        <!-- Campo para editar el nombre del libro -->
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" value="<?= $reseña->titulo ?>">
                        </div>

                        <div class="mb-3">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" class="form-control">
                                <?php if($reseña->tipo == "Libro"): ?>
                                <option value="Libro" selected>Libro</option>
                                <option value="Revista" >Revista</option>
                                <?php else: ?>
                                <option value="Libro" >Libro</option>
                                <option value="Revista" selected>Revista</option>
                                <?php endif ?>
                            </select>
                        </div>

                        <!-- Campo para editar la calificación -->
                        <div class="mb-3">
                            <label for="calificacion" class="form-label">Calificación</label>
                            <input type="number" class="form-control" name="calificacion" id="calificacion" value="<?= $reseña->calificacion ?>">
                        </div>

                        <!-- Campo para editar el comentario -->
                        <div class="mb-3">
                            <label for="comentario" class="form-label">Comentario</label>
                            <textarea class="form-control" name="comentario" id="comentario"><?= $reseña->comentario ?></textarea>
                        </div>

                        <!-- Campo para editar la fecha de la reseña -->
                        <div class="mb-3">
                            <label for="fechaReseña" class="form-label">Fecha de Reseña</label>
                            <input type="date" class="form-control" name="fechaReseña" id="fechaReseña" value="<?= $reseña->fechaReseña ?>">
                        </div>

                        <!-- Botón para enviar el formulario de edición -->
                        <div class="mb-3 text-center">
                            <input type="submit" class="btn btn-success" value="Guardar Cambios">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Columna adicional para espaciado en el diseño -->
        <div class="col-3"></div>
    </div>
</div>
