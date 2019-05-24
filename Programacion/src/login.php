<?php

require_once('conexion.php');

if (isset($_POST['email'])){
        // removes backslashes
    $email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
    $email = mysqli_real_escape_string($con,$email);
    $query = "SELECT * FROM usuario WHERE email='$email'and password='$contraseña'";
    $result = mysqli_query($conn,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);


                
                    if($rows==1){

                    $_SESSION['email'] = $email;
                    header("Location: dashboard.php");

                }else{
                    echo "<h3><p class='negrita'><b>La combinación entre nombre de usuario y cuenta no existe.</b></p></h3>";
                    header( "refresh:3;url=login.php");
                }

    }

    ?>