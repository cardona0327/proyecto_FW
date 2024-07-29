<?php
include_once("../method/usuarios_class.php");
include_once("../method/productos_class.php");
include_once("../method/token_class.php");
include_once("../method/correo_class.php");


if(isset($_GET['eliCuenta'])){
    if(Usuarios::eliminarCuentaUser($_SESSION['id'])){
        header("location:../index.php");
    }
}

if(isset($_GET['idBuscador'])){
    echo Productos::mostrarPro($_GET['idBuscador']);
    

}

if (isset($_GET['recuperar'])) {
    if (isset($_POST['correo'])) {
        if (Usuarios::buscarId($_POST['correo']) == 0) {
            echo "Error: escribiste mal la contraseña o no apareces en el sistema";
        } else {
            $correo = $_POST['correo'];
            $dato = token::creartoken(10);
            echo Correo::enviarCorreo($correo, $dato);
        }
    }
}

if(isset($_GET['cambioCo'])){
    $nuevaClave = $_POST['nuevaClave'];
    
    if(Modelo::verficaClave($contraseñaN)){
        header("location::conBaBus.php");
    }
}


?>