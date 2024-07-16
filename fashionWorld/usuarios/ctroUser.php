<?php
include_once("../method/usuarios_class.php");
include_once("../method/productos_class.php");

if(isset($_GET['eliCuenta'])){
    if(Usuarios::eliminarCuentaUser($_SESSION['id'])){
        header("location:../index.php");
    }
}

if(isset($_GET['idBuscador'])){
    echo Productos::mostrarPro($_GET['idBuscador']);
    

}

?>