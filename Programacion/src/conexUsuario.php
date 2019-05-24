<?php
require_once('conexion.php');

class Usuario extends Conexion
{
  function __construct()
  {
  }
public function listarUsuarios($conexion){
    $resultado = mysqli_query($conexion, " SELECT nombre, correo, telf, localizacion, fecha_creacion FROM usuario ");

    foreach ($resultado as $listar) {
      echo "</tr>";
      echo "<td id=separadorls class=listaUsu separadorls>".$listar['nombre']."</td>";
      echo "<td class=listaUsu>".$listar['telf']."</td>";
      echo "<td id=emilio class=listaUsu>".$listar['correo']."</td>";
      echo "<td id=locali class=listaUsu class=gris>".$listar['localizacion']."</td>";
      echo "<td id=fecha class=listaUsu>".$listar['fecha_creacion']."</td>";
      ?>
      <td class="listaUsu"><i onclick="abrirModificarUsuarios(this)" class="fas fa-edit pointer opacity"></i> &nbsp<i class="fas fa-trash pointer opacity"></i></td>
      <?php
      echo "</tr>";
    }
  }

  public function crearUsuario($conexion, $post){

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
