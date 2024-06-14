<?php
  $parte = "parte1"; //Sección por defecto.
 
  
  if( isset( $_GET[ 'parte' ] ) ){
    $parte = $_GET[ 'parte' ];
  }

  //echo $parte;

  include( "admi.php" )

?>






