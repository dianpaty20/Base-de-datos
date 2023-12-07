<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Biblioteca
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/biblioteca/agregar') ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/biblioteca/mostrar'); ?>">Consultar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/biblioteca/buscar'); ?>">Buscar</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Reseñas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/reseña/agregar') ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/reseña/mostrar'); ?>">Consultar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/reseña/buscar'); ?>">Buscar</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Préstamos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/prestamo/agregar') ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/prestamo/mostrar'); ?>">Consultar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/prestamo/buscar'); ?>">Buscar</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Multas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/multa/agregar') ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/multa/mostrar'); ?>">Consultar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/multa/buscar'); ?>">Buscar</a></li>
            </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>

      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link custom-btn-red" href="<?= base_url('index.php/auth/logout'); ?>">Cerrar Sesión</a>
      </li>
    </ul>
    </div>
  </div>
</nav>

<style>
.custom-btn-red {
  color: #fff;          
  background-color: #d9534f; 
  border-color: #d9534f; 
}
</style>