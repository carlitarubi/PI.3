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
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../public/assets/css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Eventos</title>
</head>
<body>
    <?php include 'navs/nav.php'; ?>



    <div class="content">

    <h2>Eventos</h2>
    <br>

    <div class="añadirconciertos pointer"><strong>+ Añadir Eventos</strong></div>




        <div id="planes">
                <div class="cajasplanes">
                    <div class="cajainicio3">
                    <div class="planescard planescardfoto"> <img class="imagencard" src="concierto.jpg" alt=""> </div>
                    <div class="planescard planescarddetalles">
                        <div class="detallestxt"><strong>Evento 1</strong></div>
                        <div class="detallestxt">XX ENTRADAS VENDIDAS</div>
                        <div class="detallestxt">XX COMENTARIOS</div>
                    </div>
                    <div class="planescard planescardcomprar">
                        <div class="botonescard botonmediano morado textoblanco">borrar</div>
                        <div class="botonescard botonmediano verde textoblanco">editar</div>
                    </div>
                </div>
                <div class="cajainicio3">
                <div class="planescard planescardfoto"> <img class="imagencard" src="concierto.jpg" alt=""> </div>
                    <div class="planescard planescarddetalles">
                        <div class="detallestxt"><strong>Evento 2</strong></div>
                        <div class="detallestxt">XX ENTRADAS VENDIDAS</div>
                        <div class="detallestxt">XX COMENTARIOS</div>
                    </div>
                    <div class="planescard planescardcomprar">
                        <div class="botonescard botonmediano morado textoblanco">borrar</div>
                        <div class="botonescard botonmediano verde textoblanco">editar</div>
                    </div>

                </div>
                <div class="cajainicio3">
                <div class="planescard planescardfoto"> <img class="imagencard" src="concierto.jpg" alt=""> </div>
                    <div class="planescard planescarddetalles">
                        <div class="detallestxt"><strong>Evento 3</strong></div>
                        <div class="detallestxt">XX ENTRADAS VENDIDAS</div>
                        <div class="detallestxt">XX COMENTARIOS</div>
                    </div>
                    <div class="planescard planescardcomprar">
                        <div class="botonescard botonmediano morado textoblanco">borrar</div>
                        <div class="botonescard botonmediano verde textoblanco">editar</div>
                    </div>

                </div>
                <div class="cajainicio3">
                <div class="planescard planescardfoto"> <img class="imagencard" src="concierto.jpg" alt=""> </div>
                    <div class="planescard planescarddetalles">
                        <div class="detallestxt"><strong>Evento 4</strong></div>
                        <div class="detallestxt">XX ENTRADAS VENDIDAS</div>
                        <div class="detallestxt">XX COMENTARIOS</div>
                    </div>
                    <div class="planescard planescardcomprar">
                        <div class="botonescard botonmediano morado textoblanco">borrar</div>
                        <div class="botonescard botonmediano verde textoblanco">editar</div>
                    </div>
                </div>
            </div>

            <div class="cajasplanes">
                <div class="cajainicio3">
                <div class="planescard planescardfoto"> <img class="imagencard" src="concierto.jpg" alt=""> </div>
                    <div class="planescard planescarddetalles">
                        <div class="detallestxt"><strong>Evento 5</strong></div>
                        <div class="detallestxt">XX ENTRADAS VENDIDAS</div>
                        <div class="detallestxt">XX COMENTARIOS</div>
                    </div>
                    <div class="planescard planescardcomprar">
                        <div class="botonescard botonmediano morado textoblanco">borrar</div>
                        <div class="botonescard botonmediano verde textoblanco">editar</div>
                    </div>
                </div>
                <div class="cajainicio3">
                <div class="planescard planescardfoto"> <img class="imagencard" src="concierto.jpg" alt=""> </div>
                    <div class="planescard planescarddetalles">
                        <div class="detallestxt"><strong>Evento 6</strong></div>
                        <div class="detallestxt">XX ENTRADAS VENDIDAS</div>
                        <div class="detallestxt">XX COMENTARIOS</div>
                    </div>
                    <div class="planescard planescardcomprar">
                        <div class="botonescard botonmediano morado textoblanco">borrar</div>
                        <div class="botonescard botonmediano verde textoblanco">editar</div>
                    </div>
                </div>
                <div class="cajainicio3">
                <div class="planescard planescardfoto"> <img class="imagencard" src="concierto.jpg" alt=""> </div>
                    <div class="planescard planescarddetalles">
                        <div class="detallestxt"><strong>Evento 7</strong></div>
                        <div class="detallestxt">XX ENTRADAS VENDIDAS</div>
                        <div class="detallestxt">XX COMENTARIOS</div>
                    </div>
                    <div class="planescard planescardcomprar">
                        <div class="botonescard botonmediano morado textoblanco">borrar</div>
                        <div class="botonescard botonmediano verde textoblanco">editar</div>
                    </div>
                </div>
                <div class="cajainicio3">
                <div class="planescard planescardfoto"> <img class="imagencard" src="concierto.jpg" alt=""> </div>
                    <div class="planescard planescarddetalles">
                        <div class="detallestxt"><strong>Evento 8</strong></div>
                        <div class="detallestxt">XX ENTRADAS VENDIDAS</div>
                        <div class="detallestxt">XX COMENTARIOS</div>
                    </div>
                    <div class="planescard planescardcomprar">
                        <div class="botonescard botonmediano morado textoblanco">borrar</div>
                        <div class="botonescard botonmediano verde textoblanco">editar</div>
                    </div>
                </div>
            </div>
        </div>



















    </div>


    <?php include 'navs/footer.php'; ?>

    <script src="../public/assets/js/codigo.js"></script>
</body>
</html>
