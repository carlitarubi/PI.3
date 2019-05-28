<?php
require_once('conexion.php');
require_once('conexUsuario.php');
$j=new Usuario();
$con = $j->conectar();
$k=$j->comprobarSesion();
$nm=$j->listarNombre($con);
$tp=$j->listarTipoCuenta($con);

if (!empty($_POST)) {
    $registro = $j->crearEventoAdm($con, $_POST);
  }else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../public/assets/css/estilos.css">
    <link rel="stylesheet" href="../public/assets/css/usuariosADM.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Eventos</title>
</head>
<body>
    <?php include 'navs/nav.php'; ?>



    <div class="content">

    <h2>Eventos</h2>
    <br>

    <div class="botoncrear rosa pointer" onclick="abrirRegistroUsuarios(this)"><strong>+ Añadir Eventos</strong></div>




             <div id="planes">
                 <div class="cajasplanes">

                        <?php
                            $planes=$j->eventosAdm($con);
                        ?>


                 </div>
             </div>

             <div id="fondoRegistroUsuarios" class="fondocrearUsu displayNone">
          <div id="XregistroUsuarios" class="crearUsu displayNone">
            <p class="tag">Añadir Concierto</p>
            <p  onclick="cerrarRegistroUsuarios(this)" class="Xcerrar pointer">X</p>

            <form class="" action="" method="post">

              <div class="primerform formUsu">
                <span>Tipo:</span>
                <select class="inputusu" name="concierto">
                <option value="evento">Evento</option>
                </select>
              </div>

              <div class="formUsu">
                <label for="nombre"></label>
                <span>Nombre:</span>
                <input class="inputusu" type="text" name="nombre" value="">
              </div>

              <div class="formUsu">
                <span>Estilo:</span>
                <select class="inputusu" name="estilo">
                <option value="Quedada">Quedada</option>
                <option value="Evento">Evento</option>
                </select>
              </div>

              <div class="formUsu">
                <label for="detalles"></label>
                <span>Detalles:</span>
                <input class="inputusu" type="text" name="detalles" value="">
              </div>

              <div class="formUsu">
                <label for="localizacion"></label>
                <span>Localización:</span>
                <input class="inputusu" type="text" name="localizacion" value="">
              </div>

              <div class="formUsu">
                <label for="precio"></label>
                <span>Precio:</span>
                <input class="inputusu" type="text" name="precio" value="">
              </div>

              <div class="formUsu">
                <label for="fechai"></label>
                <span>Fecha Inicial:</span>
                <input class="inputusu" type="text" name="fechai" value="" placeholder="AAAA-MM-DD">
              </div>

              <div class="formUsu">
                <label for="fechaf"></label>
                <span>Fecha Finalización:</span>
                <input class="inputusu" type="text" name="fechaf" value="" placeholder="AAAA-MM-DD">
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