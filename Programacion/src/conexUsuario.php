<?php
/**
 *
 */
class Usuario extends Conexion
{
  public $conexion;
  function __construct()
  {
  }

public function listarUsuarios(){
    $resultado=$this->conexion->query("SELECT nombre, telf, correo, localizacion, fecha_creacion FROM usuario");
    return $resultado;
  }
}
 ?>
