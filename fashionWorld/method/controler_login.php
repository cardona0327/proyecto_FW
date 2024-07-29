<?php
include_once("login_class.php");
if(!isset($_SESSION))session_start();
if(!isset($_SESSION['id']))$_SESSION['id'] = 0;

if(isset($_GET['recorrido'])){
    $documento = $_POST['documento'];
    $contraseña = $_POST['contraseña'];

    if($_GET['recorrido']==1){
        if(Loguin::verificaUsuarios($documento,$contraseña) == 1){
            $_SESSION['id'] = $documento;
            if(Loguin::verRol($_SESSION['id'] )==1){
                header("location:../usuarios/conBaBus.php");
                
            }
            if(Loguin::verRol($_SESSION['id'])==0){
                header("location:../admi/ctroBar.php");
                
            }
            
        // }else{
        //     header("location:../login.php?error=1");
        }
    }
    if($_GET['recorrido']==2){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $fecha = $_POST['fecha'];
        if(Loguin::registraUsuarios($documento,$nombre,$apellido,$correo,$contraseña,$fecha)==2){
            $_SESSION['id'] = $documento;
            header("location:../usuarios/conBaBus.php");

        }else{
            echo "no se ha registrado";
        }
    }
}

