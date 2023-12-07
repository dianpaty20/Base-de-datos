<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0 text-center">Agregar Reseñas</h4>
                </div>
                <div class="card-body">
                    <!-- Formulario que se enviará a la URL especificada cuando se envíe -->
                    <form action="<?= base_url('reseña/insert'); ?>" method="POST">
                        <!-- Campo oculto para proteger contra CSRF -->
                        <?= csrf_field() ?>

                        <!-- Campo para ingresar el nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                        </div>

                        <!-- Campo para ingresar el apellido paterno -->
                        <div class="mb-3">
                            <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" name="apellidoPaterno" id="apellidoPaterno" required>
                        </div>

                        <!-- Campo para ingresar el apellido materno -->
                        <div class="mb-3">
                            <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" name="apellidoMaterno" id="apellidoMaterno" required>
                        </div>

                        <!-- Campo para ingresar el nombre del libro o revista -->
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" required>
                        </div>

                        <!-- Campo para ingresar el tipo-->
                        <div class="mb-3">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" class="form-control">
                                <option value="" disabled selected>Seleccione uno </option>
                                <option value="Libro">Libro</option>
                                <option value="Revista">Revista</option>
                            </select>
                        </div>

                        <!-- Campo para ingresar la calificación -->
                        <div class="mb-3">
                            <label for="calificacion" class="form-label">Calificación</label>
                            <input type="number" class="form-control" name="calificacion" id="calificacion" required>
                        </div>

                        <!-- Campo para ingresar el comentario -->
                        <div class="mb-3">
                            <label for="comentario" class="form-label">Comentario</label>
                            <input type="text" class="form-control" name="comentario" id="comentario" required>
                        </div>

                        <!-- Campo para ingresar la fecha de la reseña -->
                        <div class="mb-3">
                            <label for="fechaReseña" class="form-label">Fecha de Reseña</label>
                            <input type="date" class="form-control" name="fechaReseña" id="fechaReseña" required>
                        </div>

                        <!-- Botón para enviar el formulario -->
                        <div class="text-center">
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
