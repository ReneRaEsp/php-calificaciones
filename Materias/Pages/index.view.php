<?php
$title = 'Tabla de materias';
require_once './../Views/Layout/head.php';
?>
<h1> <?php echo $title; ?> </h1>
<a href="add.php" target="_blank">Agregar materia </a>
<table border="1">
  <tr>
    <th> Id </th>
    <th> Materia </th>
    <th> Acciones </th>
  </tr>
  <tr>
    <td> 1 </td>
    <td> Matematica </td>
    <td>
      <a href="edit.php" target="_blank">Editar</a>
      <a href="delete.php" target="_blank">Eliminar</a>
    </td>
  </tr>
</table>
<?php
require_once './../Views/Layout/head.php';
?>
