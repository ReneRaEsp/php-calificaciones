<?php
$title = 'Editar Administrador';
require_once './../Views/Layout/head.php';
?>
<h1> <?php echo $title; ?> <h1>
    <form method="POST" action="./Controllers/add.php">
      <input type="hidden" name="Id">
      <input type="text" name="Nombre" placeholder="Nombre" required autocomplete="off">
      <input type="text" name="Apellido" placeholder="Apellido" required autocomplete="off">
      <input type="text" name="Usuario" placeholder="Usuario" required autocomplete="off">
      <input type="password" name="Password" required autocomplete="off" placeholder="Password"> 
      <input type="submit" value="Editar">
    </form>

    <?php
    require_once './../Views/Layout/footer.php';
    ?>
