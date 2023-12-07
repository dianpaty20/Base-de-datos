<!-- Contenedor principal -->
<div class="container">
    <!-- Fila dentro del contenedor -->
    <div class="row">
        <!-- Columna centrada en medio del contenedor -->
        <div class="col-md-8 mx-auto">
            <!-- Tarjeta que contiene el formulario -->
            <div class="card">
                <!-- Encabezado de la tarjeta con un fondo verde (bg-success) y texto blanco -->
                <div class="card-header bg-success text-white">
                    <!-- Título centrado en la tarjeta -->
                    <h4 class="mb-0 text-center">Agregar</h4>
                </div>

                <!-- Cuerpo de la tarjeta que contiene el formulario -->
                <div class="card-body">
                    <!-- Formulario que envía datos a la URL especificada mediante el método POST -->
                    <form action="<?= base_url('biblioteca/insert'); ?>" method="POST">
                        <!-- Genera un token de seguridad CSRF -->
                        <?= csrf_field() ?>

                        <!-- Campo de entrada para el título del libro o revista -->
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" required>
                        </div>

                        <!-- Campo de entrada para el autor del libro o revista -->
                        <div class="mb-3">
                            <label for="autor" class="form-label">Autor</label>
                            <input type="text" class="form-control" name="autor" id="autor" required>
                        </div>

                        <!-- Campo de entrada para la descripción del libro o revista -->
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" required>
                        </div>

                        <!-- Campo de entrada para la fecha de publicación del libro o revista-->
                        <div class="mb-3">
                            <label for="fecha_Publicacion" class="form-label">Fecha de Publicación</label>
                            <input type="date" class="form-control" name="fecha_Publicacion" id="fecha_Publicacion" required>
                        </div>

                        <!-- Campo de entrada para el número de páginas del libro o revista -->
                        <div class="mb-3">
                            <label for="paginas" class="form-label">Páginas</label>
                            <input type="number" class="form-control" name="paginas" id="paginas" required>
                        </div>

                        <!-- Campo de entrada para la ciudad de publicación del libro o revista -->
                        <div class="mb-3">
                            <label for="ciudad" class="form-label">Ciudad</label>
                            <input type="text" class="form-control" name="ciudad" id="ciudad" required>
                        </div>

                        <!-- Campo de entrada para la editorial del libro o revista -->
                        <div class="mb-3">
                            <label for="editorial" class="form-label">Editorial</label>
                            <input type="text" class="form-control" name="editorial" id="editorial" required>
                        </div>

                         <!-- Campo de entrada para el tipo ya sea libro o revista -->
                        <div class="mb-3">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" class="form-control">
                                <option value="" disabled selected>Seleccione uno </option>
                                <option value="Libro">Libro</option>
                                <option value="Revista">Revista</option>
                            </select>
                        </div>

                        <!-- Botón de envío del formulario -->
                        <div class="text-center">
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
