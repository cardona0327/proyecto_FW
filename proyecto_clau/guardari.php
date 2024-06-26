<!-- 

$doc = $_GET['documento'];
$co = $_GET['contraseña'];

include("clase.php");

$resultado = login::verificar($doc, $co);
echo $resultado;
?>-->

<?php
$doc = $_GET['documento'];
$co = $_GET['contraseña'];


include("clase.php");
login::verificar($doc,$co);

include_once("clase.php");
if(!isset($_SESSION)) session_start();
if(!isset($_SESSION['documento'])) $_SESSION['documento'] = '';
if(isset($_GET['documento']) && isset($_GET['contraseña'])) {
    $doc = $_GET['documento'];
    $co= $_GET['contraseña'];
    if(login::verificar($doc, $co) >= 1) {
        $_SESSION['documento'] =$doc;
        header("location:controlador.php?seccion=seccion3");
        exit; 
    } else {
        header("location:out.html");
        exit; 
    }
} else {
    echo "Error: Debes proporcionar usuario y contraseña.";
    exit; 
}

include( "plantilla.php" );

$doc = $_POST['documento']; // Ajusta esto según tus campos de formulario
$co = $_POST['contraseña']; // Ajusta esto según tus campos de formulario

$resultado_verificacion = verificar($doc, $co);

if($resultado_verificacion == 1){
    // Inicio de sesión exitoso
} else {
    // Redirige a la misma página con el parámetro de error si la verificación falla
    header("Location: tu_pagina.php?error=error-1");
    exit;
}
?>




