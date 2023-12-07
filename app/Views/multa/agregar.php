<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <!-- Encabezado de la tarjeta con un título centrado -->
                    <h4 class="mb-0 text-center">Agregar Multa</h4>
                </div>
                <div class="card-body">
                    <!-- Formulario que envía datos a la URL de inserción mediante el método POST -->
                    <form action="<?= base_url('multa/insert'); ?>" method="POST">
                        <?= csrf_field() ?>

                        <!-- Campo de entrada para el nombre del cliente -->
                        <div class="mb-3">
                            <label for="nombreCliente" class="form-label">Nombre del Cliente</label>
                            <input type="text" class="form-control" name="nombreCliente" id="nombreCliente" required>
                        </div>

                        <!-- Campo de entrada para el nombre del libro o revista -->
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" required>
                        </div>

                        <!-- Campo de entrada para el tipo -->
                        <div class="mb-3">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" class="form-control">
                                <option value="" disabled selected>Seleccione uno </option>
                                <option value="Libro">Libro</option>
                                <option value="Revista">Revista</option>
                            </select>
                        </div>
                        
                        <!-- Filas para las fechas de salida y entrega -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <!-- Campo de entrada para la fecha de salida -->
                                <label for="fechaSalida" class="form-label">Fecha de Salida</label>
                                <input type="date" class="form-control" name="fechaSalida" id="fechaSalida" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <!-- Campo de entrada para la fecha de entrega -->
                                <label for="fechaEntrega" class="form-label">Fecha de Entrega</label>
                                <input type="date" class="form-control" name="fechaEntrega" id="fechaEntrega" required>
                            </div>
                        </div>

                        <!-- Campo de entrada para los días de retraso -->
                        <div class="mb-3">
                            <label for="diasRetraso" class="form-label">Días de Retraso</label>
                            <input type="number" class="form-control" name="diasRetraso" id="diasRetraso" required>
                        </div>

                        <!-- Campo de entrada para el pago de multa -->
                        <div class="mb-3">
                            <label for="pagoMulta" class="form-label">Pago de Multa</label>
                            <input type="text" class="form-control" name="pagoMulta" id="pagoMulta" required>
                        </div>

                        <!-- Botón de envío del formulario -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
