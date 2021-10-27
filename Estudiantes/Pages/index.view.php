<?php
$title = 'Sistema de Notas';
require_once './../Views/Layout/head.php';
?>
<h1> Estudiantes </h1>
<a href="add.php" target="_blank">Registrar Estudiante</a>
<table border="1">
  <tr>
    <th> Id </th>
    <th> Nombre </th>
    <th> Apellido </th>
    <th> Documento </th>
    <th> Correo </th>
    <th> Materia </th>
    <th> Docente </th>
    <th> Promedio </th>
    <th> Fecha de registro </th>
    <th> Acciones </th>
  </tr>
  <tr>
    <td>1</td>
    <td>Diego</td>
    <td>De la vega</td>
    <td>838292 </td>
    <td>ddlavega@gmail.com</td>
    <td>Fisica</td>
    <td>Steven</td>
    <td>92</td>
    <td>2019-10-20</td>
    <td>
      <a href="edit.php" target="_blank">Editar</a>
      <a href="delete.php" target="_blank">Eliminar</a>
    </td>
  </tr>


</table>
<?php require_once './../Views/Layout/footer.php'; ?>
