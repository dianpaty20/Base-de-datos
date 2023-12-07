<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <!-- Tarjeta para editar préstamo de libro -->
            <div class="card">
                <div class="card-header bg-success text-white">
                    <!-- Título de la tarjeta -->
                    <h4 class="mb-0 text-center">Editar Préstamos</h4>
                </div>
                <div class="card-body">
                    <!-- Formulario para editar información del préstamo de libro -->
                    <form action="<?= base_url('prestamo/update'); ?>" method="POST">
                        <?= csrf_field() ?>
                        <!-- Campo oculto para almacenar el ID del préstamo de libro -->
                        <input type="hidden" name="id" value="<?= $prestamo->id ?>" />

                        <!-- Campo para editar el nombre del usuario -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $prestamo->nombre ?>">
                        </div>

                        <!-- Campo para editar el apellido paterno del usuario -->
                        <div class="mb-3">
                            <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" name="apellidoPaterno" id="apellidoPaterno" value="<?= $prestamo->apellidoPaterno ?>">
                        </div>

                        <!-- Campo para editar el apellido materno del usuario -->
                        <div class="mb-3">
                            <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" name="apellidoMaterno" id="apellidoMaterno" value="<?= $prestamo->apellidoMaterno ?>">
                        </div>

                        <!-- Campo para editar la edad del usuario -->
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad</label>
                            <input type="number" class="form-control" name="edad" id="edad" value="<?= $prestamo->edad ?>">
                        </div>

                        <!-- Campo para editar el nombre del libro -->
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" value="<?= $prestamo->titulo ?>">
                        </div>

                        <div class="mb-3">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" class="form-control">
                                <?php if($prestamo->tipo == "Libro"): ?>
                                <option value="Libro" selected>Libro</option>
                                <option value="Revista" >Revista</option>
                                <?php else: ?>
                                <option value="Libro" >Libro</option>
                                <option value="Revista" selected>Revista</option>
                                <?php endif ?>
                            </select>
                        </div>

                        <!-- Campo para editar la fecha de préstamo -->
                        <div class="mb-3">
                            <label for="fechaPrestamo" class="form-label">Fecha de Préstamo</label>
                            <input type="date" class="form-control" name="fechaPrestamo" id="fechaPrestamo" value="<?= $prestamo->fechaPrestamo ?>">
                        </div>

                        <!-- Campo para editar la dirección del usuario -->
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" value="<?= $prestamo->direccion ?>">
                        </div>

                        <!-- Campo para editar la ocupación del usuario -->
                        <div class="mb-3">
                            <label for="ocupacion" class="form-label">Ocupación</label>
                            <input type="text" class="form-control" name="ocupacion" id="ocupacion" value="<?= $prestamo->ocupacion ?>">
                        </div>

                        <!-- Campo para editar el teléfono del usuario -->
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" value="<?= $prestamo->telefono ?>">
                        </div>

                        <!-- Botón para guardar los cambios en el formulario -->
                        <div class="mb-3 text-center">
                            <input type="submit" class="btn btn-success" value="Guardar Cambios">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
