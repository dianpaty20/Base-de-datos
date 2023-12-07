<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <!-- Tarjeta para el formulario de edición de multa -->
            <div class="card">
                <div class="card-header bg-success text-white">
                    <!-- Encabezado de la tarjeta -->
                    <h4 class="mb-0 text-center">Editar Multa</h4>
                </div>
                <div class="card-body">
                    <!-- Formulario para la edición de multa -->
                    <form action="<?= base_url('multa/update'); ?>" method="POST">
                        <?= csrf_field() ?>
                        <!-- Campo oculto para el ID de la multa -->
                        <input type="hidden" name="id" value="<?= $multa->id ?>" />

                        <div class="mb-3">
                            <label for="nombreCliente" class="form-label">Nombre del Cliente</label>
                            <input type="text" class="form-control" name="nombreCliente" id="nombreCliente" value="<?= $multa->nombreCliente ?>">
                        </div>

                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" value="<?= $multa->titulo ?>">
                        </div>

                        <div class="mb-3">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" class="form-control">
                                <?php if($multa->tipo == "Libro"): ?>
                                <option value="Libro" selected>Libro</option>
                                <option value="Revista" >Revista</option>
                                <?php else: ?>
                                <option value="Libro" >Libro</option>
                                <option value="Revista" selected>Revista</option>
                                <?php endif ?>
                            </select>
                        </div>


                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="fechaSalida" class="form-label">Fecha de Salida</label>
                                <input type="date" class="form-control" name="fechaSalida" id="fechaSalida" value="<?= $multa->fechaSalida ?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="fechaEntrega" class="form-label">Fecha de Entrega</label>
                                <input type="date" class="form-control" name="fechaEntrega" id="fechaEntrega" value="<?= $multa->fechaEntrega ?>">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="diasRetraso" class="form-label">Días de Retraso</label>
                            <input type="number" class="form-control" name="diasRetraso" id="diasRetraso" value="<?= $multa->diasRetraso ?>">
                        </div>

                        <div class="mb-3">
                            <label for="pagoMulta" class="form-label">Pago de Multa</label>
                            <textarea class="form-control" name="pagoMulta" id="pagoMulta"><?= $multa->pagoMulta ?></textarea>
                        </div>

                        <div class="mb-3 text-center">
                            <!-- Botón para enviar el formulario y guardar los cambios -->
                            <input type="submit" class="btn btn-success" value="Guardar Cambios">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

