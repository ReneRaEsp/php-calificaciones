<?php
$title = 'Agregar Nuevo Estudiante';
require_once './../Views/Layout/head.php';
?>
<h1> <?php echo $title; ?> <h1>
    <form method="POST" action="./Controllers/add.php">
      <input type="text" name="Nombre" placeholder="Nombre" required autocomplete="off">
      <input type="text" name="Apellido" placeholder="Apellido" required autocomplete="off">
      <input type="number" name="Documento" placeholder="Documento" required autocomplete="off">
      <input type="email" name="Correo" placeholder="Correo" required autocomplete="off">
      <select name="Materia" required>
        <option disabled> Seleccione </option>
        <option value="Ingles"> Ingles </option>
        <option value="Castellano"> Castellano </option>
        <option value="Ciencias"> Ciencias </option>
      </select>
      <select name="Docente" required autofocus="off">
        <option disabled> Seleccione </option>
        <option value="Steven"> Steven </option>
        <option value="Adriano"> Adriano </option>
        <option value="Antinoo"> Antinoo </option>
      </select>
      <input type="number" name="Promedio" placeholder="Promedio" required autocomplete="off">
      <input type="submit" value="Registrar">
    </form>

    <?php
    require_once './../Views/Layout/footer.php';
    ?>
