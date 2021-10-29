<?php
require_once '../../Conexion.php';
session_start();

class Usuarios extends Conexion
{
  public function __construct()
  {
    $this->db = parent::__construct();
  }

  public function login($user, $password)
  {
    $statement = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = :user AND password = :password");
    $statement->bindParam(':user', $user);
    $statement->bindParam(':password', $password);
    $statement->execute();
    if ($statement->rowCount() == 1) {
      $result = $statement->fetch();
      $_SESSION['nombre'] = $result['nombre'] . ' ' . $result['apellido'];
      $_SESSION['id'] = $result['id_usuario'];
      $_SESSION['perfil'] = $result['perfil'];
      return true;
    }

    return false;
  }

  public function getNombre()
  {
    return $_SESSION['nombre'];
  }

  public function getId()
  {
    return $_SESSION['id'];
  }

  public function getPerfil()
  {
    return $_SESSION['perfil'];
  }

  public function validateSession()
  {
    if ($_SESSION['id'] == null) {
      header('Location: ./../../index.php');
    }
  }

  public function validateSessionAdministrador()
  {
    if ($_SESSION['id'] != null) {
      if ($_SESSION['perfil'] === 'Docente') {
        header('Location: ./../../Estudiantes/index.php');
      } else {
        header('Location: ./../index.php');
      }
    }
  }
}
