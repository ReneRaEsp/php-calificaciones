<?php

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$documento = $_POST['Usuario'];
$correo = $_POST['Password'];
$materia = $_POST['Perfil'];
$docente = $_POST['Estado'];

echo $nombre . ' ' . $apellido . ' ' . $documento . ' ' . $correo . ' ' . $materia . ' ' . $docente;
