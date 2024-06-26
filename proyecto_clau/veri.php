<?php

session_start();

if(isset($_GET['error'])){
    if($_GET['error'] == "error-1"){
        if(!isset($_SESSION['stop'])) $_SESSION['stop'] = 0;
        $_SESSION['stop'] += 1;
        
        if($_SESSION['stop'] >= 3){
            echo 'No pasas. Contraseña o usuario incorrecto.';
            exit; // Detiene la ejecución del script
        }
    }
}