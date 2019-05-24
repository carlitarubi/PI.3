<?php
require_once('conexion.php');
require_once('conexUsuario.php');
$j=new Usuario();
$con = $j->conectar();
$k=$j->comprobarSesion();
$l=$j->listarTickets($con);
$tp=$j->listarTipoCuenta($con);
$nm=$j->listarNombre($con);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/assets/css/estilos.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Dashboard - EVENFI</title>
</head>
<body>
    <?php include 'navs/nav.php'; ?>



    <div class="content">

    <h2>Inicio</h2>

   <!-- AÑADIR CONCIERTOS
       <div class="añadirconciertos"><strong>+ Añadir conciertos</strong></div>
        -->



        <div class="cajastickets">
            <div class="cajainicio1">
                <div class="cajaglobal">
                    <div class="conciertosini textocajaini">
                        Conciertos <br>
                        <div class="ccantidad"><strong>256</strong></div>
                    </div>
                    <div class="conciertosini cajaicono"><i class="fas fa-music"></i></div>
                </div>
            </div>
            <div class="cajainicio1">
            <div class="cajaglobal">
                    <div class="conciertosini textocajaini">
                        Eventos <br>
                        <div class="ccantidad"><strong>136</strong></div>
                    </div>
                    <div class="conciertosini cajaicono"><i class="fas fa-thumbtack"></i></div>
            </div>
            </div>
            <div class="cajainicio1 verde">
            <div class="cajaglobal">
                    <div class="conciertosini textocajaini textoblanco">
                        Tickets <br>
                        <div class="ccantidad textoblanco"><strong><?php 
                        foreach ($l as $listaticket) {
                            echo $listaticket['tickets'];
                        } ?></strong></div>
                    </div>
                    <div class="conciertosini cajaicono blanco"><i class="fas fa-ticket-alt textoverde"></i></div>
            </div>
            </div>
            <div class="cajainicio1 morado">
            <div class="cajaglobal">
                    <div class="conciertosini textocajaini textoblanco">
                        Cuenta <br>
                        <div class="ccantidad textoblanco"><strong><?php 
                        foreach ($tp as $listatipocuenta) {
                            echo $listatipocuenta['roll'];
                        } ?></strong></div>
                    </div>
                    <div class="conciertosini cajaicono blanco"><i class="fas fa-hand-peace textomorado"></i></div>
            </div>
            </div>
        </div>

        <div class="cajasbusqueda">
            <div class="cajainicio2">
                <div class="cajaglobal">
                    <div class="caja textocajalarga">
                        <h3>Buscar por Concierto</h3><br>
                        <h4>Busca entre los mejores conciertos de España!</h4>
                    </div>
                    <div class="caja botonlargo morado centrar">
                        <span class="textoblanco">Vamos Ciudadanos!</span>
                    </div>
                </div>
            </div>
            <div class="cajainicio2">
                <div class="cajaglobal">
                    <div class="caja textocajalarga">
                        <h3>Buscar por Concierto</h3><br>
                        <h4>Busca entre los mejores conciertos de España!</h4>
                    </div>
                    <div class="caja botonlargo morado centrar">
                        <span class="textoblanco">Vamos Ciudadanos!</span>
                    </div>
                </div>
        </div>

        <div id="planes">
            <div class="cajasplanes">
                <div class="cajainicio3">
                    <div class="planescard planescardfoto"> <img class="imagencard" src="concert.jpg" alt=""> </div>
                    <div class="planescard planescarddetalles"> 
                        <div class="detallestxt"><strong>Concierto 1</strong></div>
                        <div class="detallestxt">Aqui va una lista de detalles que describen el concierto en un breve texto.</div>
                    </div>
                    <div class="planescard planescardcomprar">
                        <div class="botonescard botonmediano morado textoblanco">Comprar</div>
                        <div class="botonescard botonmediano azul textoblanco">Más detalles</div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php include 'navs/footer.php'; ?>

    <script src="../public/assets/js/codigo.js"></script>
</body>
</html>
