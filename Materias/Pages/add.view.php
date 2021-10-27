<?php
$title = 'Agregar Materia';
require_once './../Views/Layout/head.php';
?>
<h1> <?php echo $title; ?> <h1>
    <form method="POST" action="./Controllers/add.php">
      <input type="text" name="Materia" placeholder="Materia" required autocomplete="off">
      <input type="submit" value="Agregar">
    </form>

    <?php
    require_once './../Views/Layout/footer.php';
    ?>
