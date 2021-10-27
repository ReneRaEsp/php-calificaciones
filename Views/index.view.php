<?php

$title = "Inicio de sesión";
require_once './Views/Layout/head.php';

?>
<h1> Inicio de Sesión </h1>
<form method="POST" action="./Usuarios/Controllers/Login.php">
  <label for="Usuario"> Ingrese el usuario </label><br>
  <input type="text" name="Usuario" required autocomplete="off" placeholder="Usuario"><br>
  <label for="Password"> Ingrese el Password </label><br>
  <input type="password" name="Password" required autocomplete="off" placeholder="Password"><br>
  <input type="submit" value="Iniciar Sesión">
</form>
<?php require_once './Views/Layout/head.php'; ?>
