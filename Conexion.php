<?php
class Conexion
{

  protected $db;
  private $driver = "mysql";
  private $host = "localhost";
  private $db_name = "Notas";
  private $user = "root";
  private $password = "";

  public function __construct()
  {
    try {

      $db = new PDO("{$this->driver}:host={$this->host};db_name={$this->db_name}", $this->user, $this->password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $db;
    } catch (PDOException $e) {
      echo 'Ocurrio un error al intentar conectarse a la base de datos: ' . $e->getMessage();
    }
  }
}
