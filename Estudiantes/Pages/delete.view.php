<?php
$title = 'Eliminar Estudiante';
require_once './../Views/Layout/head.php';
?>

<h1> <?php echo $title; ?> </h1>
<form method="POST" action="./Controllers/delete.php">
  <input type="hidden" name="Id" value="">
  <p> ¿Estás seguro que deseas eliminar este estudiante?</p>
  <input type="submit" value="Eliminar estudiante">
</form>

<?php
require_once './../Views/Layout/footer.php';
?>
