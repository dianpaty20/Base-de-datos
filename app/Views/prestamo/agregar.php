<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <!-- Encabezado del formulario de registro de préstamos -->
                    <h4 class="mb-0 text-center">Registrar Préstamos</h4>
                </div>
                <div class="card-body">
                    <!-- Formulario de registro de préstamo-->
                    <form action="<?= base_url('prestamo/insert'); ?>" method="POST">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <!-- Campo para ingresar el nombre del usuario -->
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                        </div>

                        <div class="mb-3">
                            <!-- Campo para ingresar el apellido paterno del usuario -->
                            <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" name="apellidoPaterno" id="apellidoPaterno" required>
                        </div>

                        <div class="mb-3">
                            <!-- Campo para ingresar el apellido materno del usuario -->
                            <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" name="apellidoMaterno" id="apellidoMaterno" required>
                        </div>

                        <div class="mb-3">
                            <!-- Campo para ingresar la edad del usuario -->
                            <label for="edad" class="form-label">Edad</label>
                            <input type="number" class="form-control" name="edad" id="edad" required>
                        </div>

                        <!-- Campo para ingresar el nombre del libro o revista -->
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" required>
                        </div>

                         <!-- Campo para ingresar el tipo -->
                        <div class="mb-3">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" class="form-control">
                                <option value="" disabled selected>Seleccione uno </option>
                                <option value="Libro">Libro</option>
                                <option value="Revista">Revista</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <!-- Campo para ingresar la fecha de préstamo -->
                            <label for="fechaPrestamo" class="form-label">Fecha de Préstamo</label>
                            <input type="date" class="form-control" name="fechaPrestamo" id="fechaPrestamo" required>
                        </div>

                        <div class="mb-3">
                            <!-- Campo para ingresar la dirección del usuario -->
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" required>
                        </div>

                        <div class="mb-3">
                            <!-- Campo para ingresar la ocupación del usuario -->
                            <label for="ocupacion" class="form-label">Ocupación</label>
                            <input type="text" class="form-control" name="ocupacion" id="ocupacion" required>
                        </div>

                        <div class="mb-3">
                            <!-- Campo para ingresar el teléfono del usuario -->
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" required>
                        </div>

                        <div class="text-center">
                            <!-- Botón para enviar el formulario -->
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
