<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-primary">
  <a class="navbar-brand" href="/servicios_psicologicos">Servicios Psicológicos </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/servicios_psicologicos">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="microtraumas.php">Microtraumas</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pacientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?= ROOT ?>/Paciente/index.php">Ver Mi Calendario</a>
          <a class="dropdown-item" href="<?= ROOT ?>/Paciente/add.php">Registrar Sesión</a>
        </div>
      </li>
    </ul>
  </div>
</nav>