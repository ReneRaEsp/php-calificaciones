<?php
require_once('../../Conexion.php');

class Materias extends Conexion
{
  public function __construct()
  {
    $this->db = parent::__construct();
  }

  public function add($nombre)
  {
    $statement = $this->db->prepare("INSERT INTO Materias (nombre) VALUES (:nombre)");
    $statement->bindParam(':nombre', $nombre);
    if ($statement->execute()) {
      header('Location: ../index.php');
    } else {
      header('Location: ../add.php');
    }
  }
  public function get()
  {
    $rows = null;
    $statement = $this->db->prepare("SELECT * FROM Materias");
    $statement->execute();
    while ($result = $statement->fetch()) {
      $rows[] = $result;
    }
    return $rows;
  }
  public function getById($id)
  {
    $rows = null;
    $statement = $this->db->prepare("SELECT * FROM Materias WHERE id_materia = :id");
    $statement->bindParam(':id', $id);
    $statement->execute();
    while ($result = $statement->fetch()) {
      $rows[] = $result;
    }
    return $rows;
  }
  public function update($id, $nombre)
  {
    $statement = $this->db->prepare("UPDATE INTO Materias nombre = :nombre WHERE id_materia = :id");
    $statement->bindParam(':id', $id);
    $statement->bindParam(':nombre', $nombre);
    if ($statement->execute()) {
      header('Location: ../index.php');
    } else {
      header('Location: ../edit.php');
    }
  }
  public function delete($id)
  {
    $statement = $this->db->prepare("DELETE INTO Materias WHERE id_materia = :id");
    $statement->bindParam(':id', $id);
    if ($statement->execute()) {
      header('Location: ../index.php');
    } else {
      header('Location: ../delete.php');
    }
  }
}
