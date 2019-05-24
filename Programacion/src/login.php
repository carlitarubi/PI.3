<?php

require_once('conexion.php');

class Login extends Conexion{

    function __construct()
  {
  }

  public function loguearUsuario($conexion, $post){

    if (isset($_POST['emaillogin'])&&isset($_POST['passlogin'])){
            // removes backslashes
        $email = stripslashes($_REQUEST['emaillogin']);
        $pass = stripslashes($_REQUEST['passlogin']);
            //escapes special characters in a string
        $email = mysqli_real_escape_string($conexion,$email);
        $query = "SELECT * FROM usuario WHERE correo='$email'and pass='$pass'";
        var_dump($email);
        var_dump($pass);
        var_dump($query);
        $result = mysqli_query($conexion,$query);
        $rows = mysqli_num_rows($result);
    
    
                    
                        if($rows==1){
    
                        $_SESSION['emaillogin'] = $email;
                        header("Location: dashboard.php");
    
                    }else{
                        echo "<h3><p class='negrita'><b>La combinación entre nombre de usuario y cuenta no existe.</b></p></h3>";
                        /* header( "refresh:3;url=login.php"); */
                    }
    
        }

}
}

    ?>