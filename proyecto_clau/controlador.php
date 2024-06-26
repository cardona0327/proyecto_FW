<?php

  $seccion = "seccion1"; //Sección por defecto.
  $seccion = "seccion3"; //Sección por defecto.

  if( isset( $_GET[ 'seccion' ] ) ){
    $seccion = $_GET[ 'seccion' ];
  }

  //echo $seccion;

  include( "plantilla.php" );
  

 

?>


<!--  
include("login.php");
if(! isset($_SESSION)) session_start();
if(! isset($_SESSION['nombre'])) $_SESSION['documento']="";

if (login::autenticar("maria "," 234")>= 1){
    $_SESSION['documento']="234 "; 
    header("location:out.html ");
}else{
    header("location:out.html");
}
-->