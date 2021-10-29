<?php
require_once('../../Conexion.php');
class Estudiantes extends Conexion
{
  public function __construct()
  {
    $this->db = parent::__construct();
  }

  public function add($nombre, $apellido, $documento, $correo, $materia, $docente, $promedio, $fecha)
  {
    $statement = $this->db->prepare("INSERT INTO estudiantes (nombre, apellido, documento, correo, materia, docente, promedio, fecha) VALUES (:nombre, :apellido, :documento, :correo, :materia, :docente, :promedio, :fecha)");
    $statement->bindParam(':nombre', $nombre);
    $statement->bindParam(':apellido', $apellido);
    $statement->bindParam(':documento', $documento);
    $statement->bindParam(':correo', $correo);
    $statement->bindParam(':materia', $materia);
    $statement->bindParam(':docente', $docente);
    $statement->bindParam(':promedio', $promedio);
    $statement->bindParam(':fecha', $fecha);
    if ($statement->execute()) {
      header('Location: ../index.php');
    } else {
      header('Location: ../add.php');
    }
  }
  public function get()
  {
    $rows = null;
    $statement = $this->db->prepare("SELECT * FROM estudiantes");
    $statement->execute();
    while ($result = $statement->fetch()) {
      $rows[] = $result;
    }
    return $rows;
  }
  public function getById($id)
  {
    $rows = null;
    $statement = $this->db->prepare("SELECT * FROM estudiantes WHERE id_estudiante = :id");
    $statement->bindParam(':id', $id);
    $statement->execute();
    while ($result = $statement->fetch()) {
      $rows[] = $result;
    }
    return $rows;
  }
  public function update($id, $nombre, $apellido, $documento, $correo, $docente, $promedio)
  {
    $statement = $this->db->prepare("UPDATE estudiantes SET nombre = :nombre, apellido = :apellido, documento = :documento, correo = :correo, docente = :docente, promedio = :promedio WHERE id_estudiante = :id");
    $statement->bindParam(':id', $id);
    $statement->bindParam(':nombre', $nombre);
    $statement->bindParam(':apellido', $apellido);
    $statement->bindParam(':documento', $documento);
    $statement->bindParam(':correo', $correo);
    $statement->bindParam(':docente', $docente);
    $statement->bindParam(':promedio', $promedio);
    if ($statement->execute()) {
      header('Location: ../index.php');
    } else {
      header('Location: ../edit.php');
    }
  }
  public function delete($id)
  {
    $statement = $this->db->prepare("DELETE * INDO estudiantes WHERE id_usuario = :id");
    $statement->bindParam(':id', $id);
    if ($statement->execute()) {
      header('Location: ../index.php');
    } else {
      header('Location: ../delete.php');
    }
  }
}
