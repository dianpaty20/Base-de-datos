<div class="container mt-5" style="background-color: #FDFEFE;">
    <div class="row justify-content-center">
        <!-- Image on the left -->
        <div class="col-md-6">
            <img src="/images/biblioteca.png" alt="" class="img-fluid rounded" style="width: 450px; height: 350px;">
        </div>

        <!-- Login form on the right -->
        <div class="col-md-6">
            <div class="card shadow-lg" style="background-color: #d8bfd8; border-color: #8a2be2;">
                <div class="card-header bg-dark text-white text-center">
                    <h2 class="mb-0">Iniciar sesión</h2>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('usuario/login'); ?>" method="POST">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                            <div id="emailHelp" class="form-text">No compartiremos tu correo con nadie más.</div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-lg" style="background-color: #9370db; border-color: #9370db;">Iniciar sesión</button>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center" style="background-color: #8a2be2; border-top: 1px solid #17202A;">
                    <p class="mb-0" style="color: #FDFEFE;">¿No tienes una cuenta? <a href="<?= base_url('registro'); ?>" style="color: #FDFEFE;">Regístrate</a></p>
                </div>
            </div>
        </div>
    </div>
</div>