<?php
require 'conexion.php';
require 'register.php';
require 'login.php';
$l=new Login();
$p=new Conexion();
$k=new Registrar();
$con = $k->conectar();
if (!empty($_POST)) {
  $registro = $k->registrarUsuario($con, $_POST);
  $login = $l->loguearUsuario($con, $_POST);
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
    <title>Main Page</title>
</head>
<body>

    <!--LOGIN FORM-->
        <div class="wrapper fadeInDown" id="zindex">
                <div id="formContent">
                    <!--X CERRAR-->
                    <span class="xcerrar" id="xcerrar" onclick="xcerrar(this)">X</span>
                  <!-- Tabs Titles -->
                  <h2 class="active">Sign In</h2>
                  <h2 class="inactive underlineHover" onclick="signupbt(this)">Sign up </h2>

                  <!-- Icon -->
                  <div class="fadeIn first">

                  </div>

                  <!-- Login Form -->
                  <form action="" method="post">
                    <input type="text" id="login" class="fadeIn second" name="emaillogin" placeholder="Email">
                    <input type="password" id="password" class="fadeIn third" name="passlogin" placeholder="Password">
                    <input type="submit" class="fadeIn fourth botonlogin" value="Sign In">
                  </form>

                  <!-- Remind Password -->
                  <div id="formFooter">
                    <a class="underlineHover forgotpass" href="#">¿Forgot password?</a>
                  </div>

                </div>
              </div>

    <!--REGISTER FORM-->

              <div class="wrapperr" id="zindexr">
                <div id="formContentr">
                    <!--X CERRAR-->
                    <span class="xcerrarr" id="xcerrarr" onclick="xcerrarr(this)">X</span>
                  <!-- Tabs Titles -->
                  <h2 class="inactiver underlineHover" onclick="signinbt(this)">Sign In</h2>
                  <h2 class="activer">Sign Up</h2>

                  <!-- Login Form -->
                  <form action="" method="post">
                    <input type="text" class="fadeIn second" name="nombre" placeholder="Name">
                    <input type="text" class="fadeIn second" name="apellido" placeholder="Last name">
                    <input type="email" class="fadeIn second" name="email" placeholder="Email">
                    <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Password">
                    <input type="submit" class="fadeIn fourth botonregister" value="Sign up">
                  </form>

                  <!-- Remind Password -->
                  <div id="formFooterr">
                    <a class="underlineHover forgotpass" href="#">¿Forgot password?</a>
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
            <li class="izqmg" id="inicio2"><a href="#inicio" id="inicio1">Home</a></li>
            <li class="izqmg" id="caracteristicas2"> <a href="#conciertos" id="caracteristicas1">Concerts</a></li>
            <li class="izqmg" id="conciertos2"><a href="#contacto" id="conciertos1">Contact us</a> </li>
            <li class="izqmg" id="contacto2"><a href="#faq" id="contacto1">FAQ</a> </li>

            <li id="ins" onclick="login(this)"> <a id="ins1">Sign in</a></li>
            <li id="regis" onclick="register(this)"> <a id="ins2">Sign up</a></li>

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
          
        Disney, the concert<br><br>
        Available from 12€
          <input id="abajo" type="submit" value="Buy Now" id="input-submit" onclick="login(this)" >
        </div>
      </br>
      </div>

        <div class="concierto1" id=>
      <img class ="imgconc" src="../public/assets/imagenes/keo.jpg">
        
        

      <div class="conciertoa">
                Kidd Keo <br><br>
        Available from 25€
          <input id="abajo" type="submit" value="Buy Now" id="input-submit" onclick="login(this)" >
        </div>
      </br>
      </div>
    </div>

    <div id="contacto">
<br>
  <h1>CONTACT US</h1>
  <form class="cf">
    <div class="half left cf">
      <input type="text" id="input-name" placeholder="Name">
      <input type="email" id="input-email" placeholder="Email">
      <input type="text" id="input-subject" placeholder="Subject">
    </div>
    <div class="half right cf">
      <textarea  cols="100" rows="10" name="message" type="text" id="input-message" placeholder="Message"></textarea>
    </div>
    <input type="submit" value="Enviar" id="input-submit" >
  </form>

    </div>

    <div id="faq">
<br>
      <h1 class="bluetype">FREQUENT ASKED QUESTIONS</h1>

          <div class="faq-content">

              <div class="faq-question">
                <input id="q1" type="checkbox" class="panel">
                <div class="plus">+</div>
                <label for="q1" class="panel-title">¿Where can I sign up?</label>
                <div class="panel-content">In the upper right corner on the "Sign up" button.</div>
              </div>

              <div class="faq-question">
                <input id="q2" type="checkbox" class="panel">
                <div class="plus">+</div>
                <label for="q2" class="panel-title">¿What is Evenfi?</label>
                <div class="panel-content">
                  Evenfi is a web platform for buying tickets, where you can find all kinds of events and / or concerts. You can also find trips organized by the users themselves to be able to attend your event. </div>
              </div>

              <div class="faq-question">
                <input id="q3" type="checkbox" class="panel">
                <div class="plus">+</div>
                <label for="q3" class="panel-title">¿How can I find the best transport?</label>
                <div class="panel-content">
                    When you buy your tickets you will see a section in which it says "Transport" and there you can choose the best transport for you.</div>
              </div>

              <div class="faq-question">
                <input id="q4" type="checkbox" class="panel">
                <div class="plus">+</div>
                <label for="q4" class="panel-title">What forms of payment are accepted?</label>
                <div class="panel-content">Stripe accepts the main credit cards, PayPal and, in some countries, bank transfers.
                  The available payment options will be specified in the purchase confirmation process</div>
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