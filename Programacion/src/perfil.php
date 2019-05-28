<?php
require 'conexion.php';
require 'conexPerfil.php';
require_once('conexUsuario.php');
$j=new Usuario();
$p=new Usuario2();
$con = $j->conectar();
$k=$j->comprobarSesion();
$nm=$j->listarNombre($con);
$tp=$j->listarTipoCuenta($con);
if (!empty($_POST)) {
  $registro = $j->crearUsuario($con, $_POST);
}else{
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/assets/css/estilos.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../public/assets/css/usuariosADM.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Administración - perfil</title>
</head>
<body>
    <?php include 'navs/nav.php';?>



    <div class="content">

    <h2>Perfil</h2>
    <br>
        <div id="usucaja">
          <div>
            <div class="botoncrear rosa pointer" onclick="abrirRegistroUsuarios(this)"><strong>Modificar Datos</strong></div>
          </div>
          <table>
            <tr>
              <th id="thUsu" class="datosUsu">Usuario</th>
              <th class="datosUsu">Teléfono</th>
              <th class="datosUsu">Email</th>
              <th class="datosUsu">Localización</th>
              <th class="datosUsu">Imagen</th>
            </tr>

            <?php
            $lista=$p->listarUsuario($con);
              ?>
          </table>
        </div>

      <!--Registro de creaccion de usuario-->
        <div id="fondoRegistroUsuarios" class="fondocrearUsu displayNone">
          <div id="XregistroUsuarios" class="crearUsu displayNone">
            <p class="tag">Modificar</p>
            <p  onclick="cerrarRegistroUsuarios(this)" class="Xcerrar pointer">X</p>

            <form class="" action="" method="post">

              <div class="primerform formUsu">
                <label for="usuario"></label>
                <span>Usuario:</span>
                <input class="inputusu" type="text" name="usuario" value="">
              </div>

              <div class="formUsu">
                <label for="telf"></label>
                <span>Teléfono:</span>
                <input class="inputusu" type="number" name="telf" value="">
              </div>

              <div class="formUsu">
                <label for="email"></label>
                <span>Email:</span>
                <input class="inputusu" type="text" name="email" value="">
              </div>

              <div class="formUsu">
                <label for="localizacion"></label>
                <span>Localización:</span>
                <input class="inputusu" type="text" name="localizacion" value="">
              </div>

              <div class="formUsu">
                <label for="pass"></label>
                <span>Contraseña:</span>
                <input class="inputusu" type="password" name="pass" value="">
              </div>
              <input class="boton rosa pointer" type="submit" name="" value="Enviar">
            </form>
          </div>
        </div>

        

    </div>


    <?php include 'navs/footer.php'; ?>



    <script src="../public/assets/js/codigo.js"></script>
</body>
</html>

<?php } ?>