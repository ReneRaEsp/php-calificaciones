<?php
$title = 'Editar Usuario';
require_once './../Views/Layout/head.php';
?>
<h1> <?php echo $title; ?> <h1>
    <form method="POST" action="./Controllers/edit.php">
      <input type="hidden" name="Id">
      <input type="text" name="Nombre" placeholder="Nombre" required autocomplete="off">
      <input type="text" name="Apellido" placeholder="Apellido" required autocomplete="off">
      <input type="text" name="Usuario" placeholder="Usuario" required autocomplete="off">
      <input type="password" name="Password" placeholder="Password" required autocomplete="off">
      <select name="Estado" required autocomplete="off">
        <option disabled> Seleccione </option>
        <option value="Activo"> Activo </option>
        <option value="Inactivo"> Inactivo </option>
      </select>
      <input type="submit" value="Registrar">
    </form>

    <?php
    require_once './../Views/Layout/footer.php';
    ?>
