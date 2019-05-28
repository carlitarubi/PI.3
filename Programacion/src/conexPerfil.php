<?php
require_once('conexion.php');

class Usuario2 extends Conexion
{
  function __construct()
  {
  }
public function listarUsuario($conexion){
    $resultado = mysqli_query($conexion, " SELECT nombre, correo, telf, localizacion, imagen FROM usuario ");

    foreach ($resultado as $listar) {
      echo "</tr>";
      echo "<td id=separadorls class=listaUsu separadorls>".$listar['nombre']."</td>";
      echo "<td class=listaUsu>".$listar['telf']."</td>";
      echo "<td id=emilio class=listaUsu>".$listar['correo']."</td>";
      echo "<td id=locali class=listaUsu class=gris>".$listar['localizacion']."</td>";
      echo "<td id=imagen class=listaUsu>".$listar['imagen']."</td>";
      ?>

      <?php
      echo "</tr>";
    }
  }

  public function Usuario($conexion, $post){

      if ((isset($post['usuario']))&&(isset($post['telf']))&&(isset($post['email']))&&(isset($post['localizacion']))&&(isset($post['pass']))) {
                  $nombre = $post['usuario'];
                  $telf = $post['telf'];
                  $email = $post['email'];
                  $pass = $post['pass'];
                  $localizacion = $post['localizacion'];
                  if($insertar =  mysqli_query($conexion, "INSERT INTO usuario (nombre, telf, correo, localizacion, pass) VALUES ('$nombre', $telf, '$email', '$localizacion', '$pass')")){
                    header("Location: usuarios.php");
  }
}
  }
}
 ?>