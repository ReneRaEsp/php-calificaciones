<?php
require_once('../../Conexion.php');

class Docentes extends Conexion
{
  public function __construct()
  {
    $this->db = parent::__construct();
  }

  public function add($nombre, $apellido, $usuario, $password)
  {
    $statement = $this->db->prepare("INSERT INTO usuarios (nombre, apellido, usuario, password, perfil, estado) VALUES (:nombre, :apellido, :usuario, :password, 'Docente', 'Activo')");
    $statement->bindParam(':nombre', $nombre);
    $statement->bindParam(':apellido', $apellido);
    $statement->bindParam(':usuario', $usuario);
    $statement->bindParam(':password', $password);
    if ($statement->execute()) {
      header('Location: ../index.php');
    } else {
      header('Location: ../add.php');
    }
  }

  public function get()
  {
    $rows = null;
    $statement =  $this->db->prepare("SELECT * FROM usuarios WHERE perfil = 'Docente'");
    $statement->execute();
    while ($result = $statement->fetch()) {
      $rows[] = $result;
    }
    return $rows;
  }

  public function getById($id)
  {
    $rows = null;
    $statement =  $this->db->prepare("SELECT * FROM usuarios WHERE perfil = 'Docente' AND id_usuario = :id");
    $statement->bindParam(':id', $id);
    $statement->execute();
    while ($result = $statement->fetch()) {
      $rows[] = $result;
    }
    return $rows;
  }

  public function update($id, $nombre, $apellido, $usuario, $password, $estado)
  {
    $statement = $this->db->prepare("UPDATE usuarios nombre = :nombre, apellido = :apellido, usuario = :usuario, password = :password, estado = :estado) WHERE id_usuario = :id");
    $statement->bindParam(':nombre', $nombre);
    $statement->bindParam(':apellido', $apellido);
    $statement->bindParam(':usuario', $usuario);
    $statement->bindParam(':password', $password);
    $statement->bindParam(':estado', $estado);
    $statement->bindParam(':id', $id);
    if ($statement->execute()) {
      header('Location: ../index.php');
    } else {
      header('Location: ../edit.php');
    }
  }

  public function delete($id)
  {
    $statement = $this->db->prepare("DELETE * INTO usuarios WHERE id_usuario = :id");
    $statement->bindParam(':id', $id);
    if ($statement->execute()) {
      header('Location: ../index.php');
    } else {
      header('Location: ../delete.php');
    }
  }
}
