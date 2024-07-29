<?php
include_once("../method/usuarios_class.php");
include_once("../method/productos_class.php");
include_once("../method/token_class.php");


if(isset($_GET['eliCuenta'])){
    if(Usuarios::eliminarCuentaUser($_SESSION['id'])){
        header("location:../index.php");
    }
}

if(isset($_GET['idBuscador'])){
    echo Productos::mostrarPro($_GET['idBuscador']);
    

}

if(isset($_GET['recuperar'])){
    // echo "hola";
    if(isset($_POST['correo'])){
        if(Usuarios::buscarId($_POST['correo'])==0){
            echo "error escribiste mal la contraseña o no apareces en el sistema";
        }else{
            $correo = $_POST['correo'];
            $id = Usuarios::buscarId($correo);
            $_SESSION['token'] = Token::crearToken(10);
            echo $_SESSION['token'];
        }
    }
    
}

?>