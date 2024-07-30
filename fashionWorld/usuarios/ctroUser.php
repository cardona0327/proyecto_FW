<?php
include_once("../method/usuarios_class.php");
include_once("../method/productos_class.php");
include_once("../method/token_class.php");
include_once("../method/correo_class.php");
include_once("../method/modelo.php");
include_once("../method/encrip_class.php");


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
    if(isset($_POST['nuevaClave']) && isset($_POST['newPassword'])){
        $contraseñaN = $_POST['nuevaClave'];
        $contraseñaUser = $_POST['newPassword'];
        $doc = EncriptarURl::desencriptar($_GET['codigo']);
        
        if(Usuarios::verificaCon($contraseñaN,$doc)==0){
            echo "la contraseña no coincide";
        }else{
            if( Modelo::sqlCambiarClave($contraseñaUser,$doc)){
                header("location:../login.php");
            }
           
        }
        
        // if(Modelo::verficaClave($contraseñaN)){ 
        //     header("location: conBaBus.php");
        //     exit; // Agrega esta línea para evitar problemas con la redirección
        // }
    }
}


?>