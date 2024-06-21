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
?>




