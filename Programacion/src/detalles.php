<?php
require_once('conexion.php');
require_once('conexUsuario.php');
$j=new Usuario();
$con = $j->conectar();
$k=$j->comprobarSesion();
$nm=$j->listarNombre($con);
$tp=$j->listarTipoCuenta($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/assets/css/estilos.css">
    <link rel="stylesheet" href="../public/assets/css/estilos2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include 'navs/nav.php'; ?>

    
    
    <div class="content">
       <div class="caja">
            <div class="cajita">
            <?php 
                            $mostrardatosentradadetalles=$j->detallesEntrada($con);
                            ?>
               

            </div>
    </div>
   <!-- AÑADIR CONCIERTOS
       <div class="añadirconciertos"><strong>+ Añadir conciertos</strong></div>
        -->



        
        
        

















    </div>


    <?php include 'navs/footer.php'; ?>

    <script src="../public/assets/js/codigo.js"></script>
</body>
</html>