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

  public function listarTickets($conexion){
    $email=$_SESSION['emaillogin'];
    $consulta= mysqli_query($conexion, "SELECT tickets FROM usuario WHERE correo='$email'");

    return $consulta;
  }

  public function listarTipoCuenta($conexion){
    $email=$_SESSION['emaillogin'];
    $consulta= mysqli_query($conexion, "SELECT roll FROM usuario WHERE correo='$email'");

    return $consulta;
  }

  public function listarNombre($conexion){
    $email=$_SESSION['emaillogin'];
    $consulta= mysqli_query($conexion, "SELECT nombre FROM usuario WHERE correo='$email'");

    return $consulta;
  }

  public function listarPlanes($conexion){
    $sql="SELECT p.* FROM plan p ".
       "ORDER BY p.id DESC LIMIT 8";
    
    $entradas = mysqli_query($conexion, $sql);
    
    foreach ($entradas as $plan) {
      echo "<div class='cajainicio3'>";
      echo "<div class='planescard planescardfoto'> <img class='imagencard' src='concert.jpg' alt=''> </div>";
      echo "<div class='planescard planescarddetalles'> "; 
      echo "<div class='detallestxt'><strong>".$plan['nombre']."</strong></div>";      
      echo "<div class='detallestxt'>".substr($plan['detalles'], 0, 50)."..."."</div>";      
      echo "</div>";   
      echo "<div class='planescard planescardcomprar'>";   
      echo "<div class='botonescard botonmediano morado textoblanco'>Comprar</div>";      
      echo "<div class='botonescard botonmediano azul textoblanco'>Más detalles</div>";      
      echo "</div>";   
      echo "</div>"; 
    }
  }

  public function contarConciertos($conexion){
    $consulta= mysqli_query($conexion, "SELECT COUNT(*) as c FROM plan WHERE tipo = 'Concierto'");
    if($consulta){
      while($row=mysqli_fetch_assoc($consulta)){
        echo $row['c'];
      }
    }
  }

  public function contarEventos($conexion){
    $consulta= mysqli_query($conexion, "SELECT COUNT(*) as c FROM plan WHERE tipo = 'Evento'");
    if($consulta){
      while($row=mysqli_fetch_assoc($consulta)){
        echo $row['c'];
      }
    }
  }

  function conciertoRock($conexion){
    $sql="SELECT p.* FROM plan p ".
       "WHERE estilo = 'Rock' ORDER BY p.id DESC";
    
    $entradas = mysqli_query($conexion, $sql);
    
    foreach ($entradas as $plan) {
      echo "<div class='cajainicio3'>";
      echo "<div class='planescard planescardfoto'> <img class='imagencard' src='concert.jpg' alt=''> </div>";
      echo "<div class='planescard planescarddetalles'> "; 
      echo "<div class='detallestxt'><strong>".$plan['nombre']."</strong></div>";      
      echo "<div class='detallestxt'>".substr($plan['detalles'], 0, 50)."..."."</div>";      
      echo "</div>";   
      echo "<div class='planescard planescardcomprar'>";   
      echo "<div class='botonescard botonmediano morado textoblanco'>Comprar</div>";      
      echo "<div class='botonescard botonmediano azul textoblanco'>Más detalles</div>";      
      echo "</div>";   
      echo "</div>"; 
    }
  }

  function conciertoMetal($conexion){
    $sql="SELECT p.* FROM plan p ".
       "WHERE estilo = 'Metal' ORDER BY p.id DESC";
    
    $entradas = mysqli_query($conexion, $sql);
    
    foreach ($entradas as $plan) {
      echo "<div class='cajainicio3'>";
      echo "<div class='planescard planescardfoto'> <img class='imagencard' src='concert.jpg' alt=''> </div>";
      echo "<div class='planescard planescarddetalles'> "; 
      echo "<div class='detallestxt'><strong>".$plan['nombre']."</strong></div>";      
      echo "<div class='detallestxt'>".substr($plan['detalles'], 0, 50)."..."."</div>";      
      echo "</div>";   
      echo "<div class='planescard planescardcomprar'>";   
      echo "<div class='botonescard botonmediano morado textoblanco'>Comprar</div>";      
      echo "<div class='botonescard botonmediano azul textoblanco'>Más detalles</div>";      
      echo "</div>";   
      echo "</div>"; 
    }
  }

  function conciertoRap($conexion){
    $sql="SELECT p.* FROM plan p ".
       "WHERE estilo = 'Rap' ORDER BY p.id DESC";
    
    $entradas = mysqli_query($conexion, $sql);
    
    foreach ($entradas as $plan) {
      echo "<div class='cajainicio3'>";
      echo "<div class='planescard planescardfoto'> <img class='imagencard' src='concert.jpg' alt=''> </div>";
      echo "<div class='planescard planescarddetalles'> "; 
      echo "<div class='detallestxt'><strong>".$plan['nombre']."</strong></div>";      
      echo "<div class='detallestxt'>".substr($plan['detalles'], 0, 50)."..."."</div>";      
      echo "</div>";   
      echo "<div class='planescard planescardcomprar'>";   
      echo "<div class='botonescard botonmediano morado textoblanco'>Comprar</div>";      
      echo "<div class='botonescard botonmediano azul textoblanco'>Más detalles</div>";      
      echo "</div>";   
      echo "</div>"; 
    }
  }

  function conciertoQuedadas($conexion){
    $sql="SELECT p.* FROM plan p ".
       "WHERE estilo = 'Quedada' ORDER BY p.id DESC";
    
    $entradas = mysqli_query($conexion, $sql);
    
    foreach ($entradas as $plan) {
      echo "<div class='cajainicio3'>";
      echo "<div class='planescard planescardfoto'> <img class='imagencard' src='concert.jpg' alt=''> </div>";
      echo "<div class='planescard planescarddetalles'> "; 
      echo "<div class='detallestxt'><strong>".$plan['nombre']."</strong></div>";      
      echo "<div class='detallestxt'>".substr($plan['detalles'], 0, 50)."..."."</div>";      
      echo "</div>";   
      echo "<div class='planescard planescardcomprar'>";   
      echo "<div class='botonescard botonmediano morado textoblanco'>Comprar</div>";      
      echo "<div class='botonescard botonmediano azul textoblanco'>Más detalles</div>";      
      echo "</div>";   
      echo "</div>"; 
    }
  }

  function conciertoFestivales($conexion){
    $sql="SELECT p.* FROM plan p ".
       "WHERE estilo = 'Festival' ORDER BY p.id DESC";
    
    $entradas = mysqli_query($conexion, $sql);
    
    foreach ($entradas as $plan) {
      echo "<div class='cajainicio3'>";
      echo "<div class='planescard planescardfoto'> <img class='imagencard' src='concert.jpg' alt=''> </div>";
      echo "<div class='planescard planescarddetalles'> "; 
      echo "<div class='detallestxt'><strong>".$plan['nombre']."</strong></div>";      
      echo "<div class='detallestxt'>".substr($plan['detalles'], 0, 50)."..."."</div>";      
      echo "</div>";   
      echo "<div class='planescard planescardcomprar'>";   
      echo "<div class='botonescard botonmediano morado textoblanco'>Comprar</div>";      
      echo "<div class='botonescard botonmediano azul textoblanco'>Más detalles</div>";      
      echo "</div>";   
      echo "</div>"; 
    }
  }

  function conciertosAdm($conexion){
    $sql="SELECT p.* FROM plan p ".
       "WHERE tipo = 'Concierto' ORDER BY p.id DESC";
    
    $entradas = mysqli_query($conexion, $sql);
    
    foreach ($entradas as $plan) {
      echo "<div class='cajainicio3'>";
      echo "<div class='planescard planescardfoto'> <img class='imagencard' src='concert.jpg' alt=''> </div>";
      echo "<div class='planescard planescarddetalles'> "; 
      echo "<div class='detallestxt'><strong>".$plan['nombre']."</strong></div>";      
      echo "<div class='detallestxt'>".substr($plan['detalles'], 0, 50)."..."."</div>";      
      echo "</div>";   
      echo "<div class='planescard planescardcomprar'>";   
      echo "<div class='botonescard botonmediano morado textoblanco'>Borrar</div>";      
      echo "<div class='botonescard botonmediano azul textoblanco'>Editar</div>";      
      echo "</div>";   
      echo "</div>"; 
    }
  }

  function eventosAdm($conexion){
    $sql="SELECT p.* FROM plan p ".
       "WHERE tipo = 'Evento' ORDER BY p.id DESC";
    
    $entradas = mysqli_query($conexion, $sql);
    
    foreach ($entradas as $plan) {
      echo "<div class='cajainicio3'>";
      echo "<div class='planescard planescardfoto'> <img class='imagencard' src='concert.jpg' alt=''> </div>";
      echo "<div class='planescard planescarddetalles'> "; 
      echo "<div class='detallestxt'><strong>".$plan['nombre']."</strong></div>";      
      echo "<div class='detallestxt'>".substr($plan['detalles'], 0, 50)."..."."</div>";      
      echo "</div>";   
      echo "<div class='planescard planescardcomprar'>";   
      echo "<div class='botonescard botonmediano morado textoblanco'>Borrar</div>";      
      echo "<div class='botonescard botonmediano azul textoblanco'>Editar</div>";      
      echo "</div>";   
      echo "</div>"; 
    }
  }

  public function crearConciertoAdm($conexion, $post){

    if ((isset($post['concierto']))&&(isset($post['nombre']))&&(isset($post['estilo']))&&(isset($post['detalles']))&&(isset($post['localizacion']))&&(isset($post['precio']))&&(isset($post['fechai']))&&(isset($post['fechaf']))) {
                $tipo = $post['concierto'];
                $nombre = $post['nombre'];
                $estilo = $post['estilo'];
                $detalles = $post['detalles'];
                $localizacion = $post['localizacion'];
                $precio = $post['precio'];
                $fechai = $post['fechai'];
                $fechaf = $post['fechaf'];
                if($insertar =  mysqli_query($conexion, "INSERT INTO plan (tipo, nombre, estilo, detalles, localizacion, precio, fecha_in, fecha_fin) VALUES ('$tipo', '$nombre', '$estilo', '$detalles', '$localizacion', $precio, '$fechai', '$fechaf')")){
                  header("Location: conciertos.php");
                }
    }
  }

  public function crearEventoAdm($conexion, $post){

    if ((isset($post['concierto']))&&(isset($post['nombre']))&&(isset($post['estilo']))&&(isset($post['detalles']))&&(isset($post['localizacion']))&&(isset($post['precio']))&&(isset($post['fechai']))&&(isset($post['fechaf']))) {
                $tipo = $post['concierto'];
                $nombre = $post['nombre'];
                $estilo = $post['estilo'];
                $detalles = $post['detalles'];
                $localizacion = $post['localizacion'];
                $precio = $post['precio'];
                $fechai = $post['fechai'];
                $fechaf = $post['fechaf'];

                var_dump($fechaf);
                if($insertar =  mysqli_query($conexion, "INSERT INTO plan (tipo, nombre, estilo, detalles, localizacion, precio, fecha_in, fecha_fin) VALUES ('$tipo', '$nombre', '$estilo', '$detalles', '$localizacion', $precio, '$fechai', '$fechaf')")){
                  header("Location: eventos.php");
                }
    }
  }
}
 ?>
