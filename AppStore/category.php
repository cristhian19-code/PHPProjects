<?php
  if(isset($_GET['categoria'])){
    if (!empty($_GET['categoria'])) {
      require './views/category.view.php';
    } else {
      header('Location: index.php');
    }
  }else {
    header('Location: index.php');
  }

?>
