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
                <div class="cajilla">
                    <table >
                        <tr align="left" coldspan="4" bgcolor="#dcdde1">
                            <th  align="center" style="width: 35em">Producto</th>
                            <th style= "width:  10em">Precio</th>
                             <th style="width: 10em">Cantidad</th>
                             <th style="width: 10em">Total</th>
                        </tr>
                    </table>
                    <table style="border-left:  #dcdde1 1px solid; 
                                 border-right:  #dcdde1 1px solid; 
                                border-bottom : #dcdde1 1px solid;">
                        <tr id="tabla2s" >
                            <?php 
                            $mostrardatosentradacomprar=$j->comprarEntrada($con);
                            ?>
                            
                        </tr>
                     </table>
                     <br><br><br>
                     <br style=><strong>Nota</strong></br>
                     <input   type="Comentario" name="Comentario" placeholder="Escribe algo" style="width: 78em; height: 10em; margin-top:2em ">
                     <br></br>  
                     <input id="comprar" type="submit" value="Comprar" onclick="" style="margin-left: 65em; margin-top: 2em; width: 10em; height: 3em; background-color: #727CF5; color: white; border-style: none; border-radius: 5px; cursor: pointer;">
                </div>
               

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