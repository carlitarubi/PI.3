<?php
/**
 *
 */
require_once('conexion.php');

class Registrar extends Conexion
{
  function __construct()
  {
  }

  public function registrarUsuario($conexion, $post){

      if ((isset($post['nombre']))&&(isset($post['apellido']))&&(isset($post['email']))&&(isset($post['contraseña']))) {
          $nombre = $post['nombre'];
          var_dump($nombre);
                  $apellido = $post['apellido'];
                  var_dump($apellido);
                  $email = $post['email'];
                  var_dump($email);
                  $contraseña = $post['contraseña'];
                  var_dump($contraseña);
                  if($insertar =  mysqli_query($conexion, "INSERT INTO usuario (nombre, apellido, contraseña, correo) VALUES ('$nombre', '$apellido', '$contraseña', '$email')")){
                    header("Location: index.php");
  }
}
  }
}
 ?>