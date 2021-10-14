<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="./public/img/market.svg" alt="" height="40px" width="40px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Productos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="productos.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="category.php?categoria=frutas">Frutas</a></li>
            <li><a class="dropdown-item" href="category.php?categoria=verduras">Verduras</a></li>
            <li><a class="dropdown-item" href="category.php?categoria=abarrotes">Abarrotes</a></li>
            <li><a class="dropdown-item" href="category.php?categoria=lacteos">Lacteos y Huevos</a></li>
            <li><a class="dropdown-item" href="category.php?categoria=carnes">Carnes y Pollos</a></li>
            <li><a class="dropdown-item" href="category.php?categoria=pasteleria">Pasteleria</a></li>
            <li><a class="dropdown-item" href="category.php?categoria=bebidas">Bebidas</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
