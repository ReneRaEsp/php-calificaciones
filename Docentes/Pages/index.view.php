<?php
$title = 'Lista de Docentes';
require_once './../Views/Layout/head.php';
?>
<h1> <?php echo $title; ?> </h1>
<a href="add.php" target="_blank">Registrar Docente</a>
<table border="1">
  <tr>
    <th> Id </th>
    <th> Nombre </th>
    <th> Apellido </th>
    <th> Usuario </th>
    <th> Perfil </th>
    <th> Estado </th>
    <th> Acciones </th>
  </tr>
  <tr>
    <td>1</td>
    <td>Diego</td>
    <td>De la vega</td>
    <td>ddlavega </td>
    <td>Administrador</td>
    <td>Activo</td>
    <td>
      <a href="edit.php" target="_blank">Editar</a>
      <a href="delete.php" target="_blank">Eliminar</a>
    </td>
  </tr>


</table>
<?php require_once './../Views/Layout/footer.php'; ?>
