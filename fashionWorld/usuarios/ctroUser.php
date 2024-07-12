<?php
include_once("../method/usuarios_class.php");

if(Usuarios::eliminarCuentaUser($_SESSION['id'])){
    header("location:index.php");
}

?>