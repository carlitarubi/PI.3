<?php
require 'conexion.php';
require 'register.php';
$k=new Registrar();
$con = $k->conectar();
if (!empty($_POST)) {
  $registro = $k->registrarUsuario($con, $_POST);
}else{


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--FAVICON-->
    <link rel="shortcut icon" href="img/favicon3.png" type="image/x-icon">

    <!-- Custom CSS-->
    <link rel="stylesheet" href="../public/assets/css/faq.css">
    <link rel="stylesheet" href="../public/assets/css/contacto.css">
    <link rel="stylesheet" href="../public/assets/css/styles.css">
    <link rel="stylesheet" href="../public/assets/css/signin.css">
    <link rel="stylesheet" href="../public/assets/css/register.css">



    <!-- Attributes -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Tittle -->
    <title>MockUp</title>
</head>
<body>

    <!--LOGIN FORM-->
        <div class="wrapper fadeInDown" id="zindex">
                <div id="formContent">
                    <!--X CERRAR-->
                    <span class="xcerrar" id="xcerrar" onclick="xcerrar(this)">X</span>
                  <!-- Tabs Titles -->
                  <h2 class="active">Iniciar Sesión</h2>
                  <h2 class="inactive underlineHover" onclick="signupbt(this)">Registrarse </h2>

                  <!-- Icon -->
                  <div class="fadeIn first">

                  </div>

                  <!-- Login Form -->
                  <form>
                    <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario">
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
                    <input type="submit" class="fadeIn fourth botonlogin" value="Iniciar Sesión">
                  </form>

                  <!-- Remind Password -->
                  <div id="formFooter">
                    <a class="underlineHover forgotpass" href="#">¿Has olvidado la Contraseña?</a>
                  </div>

                </div>
              </div>

    <!--REGISTER FORM-->

              <div class="wrapperr" id="zindexr">
                <div id="formContentr">
                    <!--X CERRAR-->
                    <span class="xcerrarr" id="xcerrarr" onclick="xcerrarr(this)">X</span>
                  <!-- Tabs Titles -->
                  <h2 class="inactiver underlineHover" onclick="signinbt(this)">Iniciar Sesión</h2>
                  <h2 class="activer">Registrarse</h2>

                  <!-- Login Form -->
                  <form action="" method="post">
                    <input type="text" class="fadeIn second" name="nombre" placeholder="Nombre">
                    <input type="text" class="fadeIn second" name="apellido" placeholder="Apellido">
                    <input type="email" class="fadeIn second" name="email" placeholder="Email">
                    <input type="password" id="password" class="fadeIn third" name="contraseña" placeholder="Contraseña">
                    <input type="submit" class="fadeIn fourth botonregister" value="Registrarse">
                  </form>

                  <!-- Remind Password -->
                  <div id="formFooterr">
                    <a class="underlineHover forgotpass" href="#">¿Has olvidado la Contraseña?</a>
                  </div>

                </div>
              </div>

        <img id="logoneg" class="logonav2 logonegro" src="img/logonegro.png" alt="">

    <div id="menu">
        <ul>
            <li>
                <img id="logoblanc" class="logonav" src="img/logoblanco2.png" alt="">
                <img id="logotrans" class="logonav logonegro" src="img/logofi.png" alt="">

            </li>
            <li class="izqmg" id="inicio2"><a href="#inicio" id="inicio1">Inicio</a></li>
            <li class="izqmg" id="caracteristicas2"> <a href="#conciertos" id="caracteristicas1">Conciertos</a></li>
            <li class="izqmg" id="conciertos2"><a href="#contacto" id="conciertos1">Contacto</a> </li>
            <li class="izqmg" id="contacto2"><a href="#faq" id="contacto1">FAQ</a> </li>

            <li id="ins" onclick="login(this)"> <a id="ins1">Iniciar Sesión</a></li>
            <li id="regis" onclick="register(this)"> <a id="ins2">Registrarse</a></li>

        </ul>
    </div>

    <slider id="inicio">
        <slide>
            <p>Medusa</p>
        </slide>
        <slide>
            <p>Resurrection Fest</p>
        </slide>
        <slide>
            <p>Viña Rock</p>
        </slide>
        <slide>
            <p>Gamergy</p>
          </a>
        </slide>
    </slider>

    <div id ="conciertos">
      <div class="concierto">
      <img class ="imgconc" src="../public/assets/imagenes/disney.jpg">
      
      <div class="conciertoa">
          
        Disney, el concierto<br><br>
        Diponible desde 12€
          <input id="abajo" type="submit" value="Comprar" id="input-submit" onclick="login(this)" >
        </div>
      </br>
      </div>

        <div class="concierto1" id=>
      <img class ="imgconc" src="../public/assets/imagenes/keo.jpg">
        
        

      <div class="conciertoa">
                Kidd Keo <br><br>
        Diponible desde 25€
          <input id="abajo" type="submit" value="Comprar" id="input-submit" onclick="login(this)" >
        </div>
      </br>
      </div>
    </div>

    <div id="contacto">
<br>
  <h1>CONTÁCTANOS</h1>
  <form class="cf">
    <div class="half left cf">
      <input type="text" id="input-name" placeholder="Nombre">
      <input type="email" id="input-email" placeholder="Email">
      <input type="text" id="input-subject" placeholder="Asunto">
    </div>
    <div class="half right cf">
      <textarea  cols="100" rows="10" name="message" type="text" id="input-message" placeholder="Mensaje"></textarea>
    </div>
    <input type="submit" value="Enviar" id="input-submit" >
  </form>

    </div>

    <div id="faq">
<br>
      <h1 class="bluetype">PREGUNTAS FRECUENTES</h1>

          <div class="faq-content">

              <div class="faq-question">
                <input id="q1" type="checkbox" class="panel">
                <div class="plus">+</div>
                <label for="q1" class="panel-title">¿Donde puedo registrarme?</label>
                <div class="panel-content">En la esquina superior derecha en el botón "Registrarse".</div>
              </div>

              <div class="faq-question">
                <input id="q2" type="checkbox" class="panel">
                <div class="plus">+</div>
                <label for="q2" class="panel-title">¿Para qué sirve Evenfi?</label>
                <div class="panel-content">Evenfi es una plataforma web de compra de entradas, donde podrás encontrar todo tipo de eventos y/o conciertos. Además podrás encontrar viajes organizados por los propios usuarios para poder acudir a tu evento. </div>
              </div>

              <div class="faq-question">
                <input id="q3" type="checkbox" class="panel">
                <div class="plus">+</div>
                <label for="q3" class="panel-title">¿Como puedo encontrar el mejor transporte que más me convenga?</label>
                <div class="panel-content">Al comprar tus entradas te aparecerá un apartado en el cual pone "Transporte" y ahí podrás elegir el qué más se adecúe a tus necesidades.</div>
              </div>

              <div class="faq-question">
                <input id="q4" type="checkbox" class="panel">
                <div class="plus">+</div>
                <label for="q4" class="panel-title">What happens if Pinocchio says, "my nose will grow now"?</label>
                <div class="panel-content">Certain questions are better left</div>
              </div>

              <div class="faq-question">
                <input id="q5" type="checkbox" class="panel">
                <div class="plus">+</div>
                <label for="q5" class="panel-title">What happens if Pinocchio says, "my nose will grow now"? ""</label>
                <div class="panel-content">Certain questions are better left</div>
          </div>
    </div>
<br>



    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Custom Code -->
    <script src="../public/assets/js/script2.js"></script>
</body>
</html>

<?php } ?>