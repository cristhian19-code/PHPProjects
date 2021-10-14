<?php
  $errores = "";
  $enviado = "";

  if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $message = $_POST['message'];

    //verificando si hay contenido en la caja de correo
    if (!empty($email)) {
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);

      //validando  si el correo es valido
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $enviado = false;
        $errores .= "<p>Correo invalido</p>";
      }
      
    }else{
      $enviado = false;
      $errores .= "<p>Introducir un correo</p>";
    }

    //verificando si hay contenido en la caja de contraseña
    if (empty($password)) {
      $enviado = false;
      $errores .= "<p>Introducir una contraseña</p>";
    }

    //verificando si hay contenido en la caja de mensaje
    if (!empty($message)) {
      $message = htmlspecialchars($message);
      $message = trim($message);
      $message = stripcslashes($message);
    }else{
      $enviado = false;
      $errores .= "<p>Introducir un mensaje</p>";
    }

    if(empty($errores)){
      $enviado = true;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="formulario">
    <!-- Inputs del formulario -->
    <input name="email" class="form-control input" type="email" placeholder="Email" name="email" value="<?php if(!$enviado && isset($email)) echo $email; ?>">
    <input name="password" class="form-control input" type="password" placeholder="Password" name="password" value="<?php if(!$enviado && isset($password)) echo $password; ?>">
    
    <textarea name="message" placeholder="Message" class="form-control" rows="8"><?php if(!$enviado && isset($message)) echo $message; ?></textarea>
    
    <!-- Informacion del error -->
      <?php if(!empty($errores)): ?>
        <div class="alert error">
          <?php echo $errores; ?>
        </div>
      <?php elseif ($enviado): ?>
        <div class="alert success">
          <p>Mensaje enviado</p>
        </div>
      <?php endif;?>

    <!-- Input de envio -->
    <input type="submit" value="Enviar Comentario" class="btn btn-orange" name="submit">
  </form>
</body>
</html>