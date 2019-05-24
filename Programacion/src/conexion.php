<?php
/**
 * DB
 */
class Conexion{
  function __construct(){
  }
  public function conectar(){
  $conexion = new mysqli('127.0.0.1','root','','evenfi');
  if (session_status() == PHP_SESSION_NONE) {
      session_start();

  }
  return $conexion;

}

  public function comprobarSesion(){
      if (isset($_SESSION['emaillogin'])) {
        
      }else {
        header("Location: index.php");
      }
  }
}
?>
