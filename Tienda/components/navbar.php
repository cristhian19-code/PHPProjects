<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="tienda.php">Registro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="agregar.php">Agregar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productos.php">Comidas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cerrar_sesion.php">Cerrar Sesion</a>
        </li>
      </ul>
      <div class="d-flex align-items-center my-1">
        <img class="rounded-circle" src="https://images.pexels.com/photos/4339447/pexels-photo-4339447.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" height="40px" width="40px">
        <h6 class="text-white mx-2"><?php echo $_SESSION['usuario']; ?></h6>
      </div>
    </div>
  </div>
</nav>