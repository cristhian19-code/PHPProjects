<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/session.css">
  </head>
  <body>
    <?php require './components/Navbar.php'; ?>

    <form class="col-6 card py-5 px-4" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
      <p class="display-4 text-center">Login</p>
      <div class="my-3">
        <label for="name">Nombre</label>
        <input id="name" class="form-control" type="text" placeholder="Nombre">
      </div>
      <div class="my-3">
        <label for="lastname">Apellido</label>
        <input id="lastname" class="form-control" type="text" placeholder="Apellido">
      </div>
      <div class="my-3">
        <label for="name">Nombre</label>
        <input id="name" class="form-control" type="text" placeholder="Nombre">
      </div>
    </form>
  </body>
</html>
