<?php

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$documento = $_POST['Documento'];
$correo = $_POST['Correo'];
$materia = $_POST['Materia'];
$docente = $_POST['Docente'];
$promedio = $_POST['Promedio'];

echo $nombre . ' ' . $apellido . ' ' . $documento . ' ' . $correo . ' ' . $materia . ' ' . $docente . ' ' . $promedio;
