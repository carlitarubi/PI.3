<?php
/**
 *
 */
require_once('conexion.php');

$j=new Conexion();
$con = $j->conectar();

          $id = $_GET['id'];
                  if($insertar =  mysqli_query($con, "DELETE FROM plan WHERE plan.id = $id ")){
                    header("Location: eventos.php");
                  }

 ?>