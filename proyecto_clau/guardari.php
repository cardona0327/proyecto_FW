<!-- 

$doc = $_GET['documento'];
$co = $_GET['contraseña'];

include("clase.php");

$resultado = login::verificar($doc, $co);
echo $resultado;
?>-->

<?php
session_start(); 

if(isset($_POST['documento']) && isset($_POST['contraseña'])) {
    $doc = $_POST['documento'];
    $co = $_POST['contraseña'];

    include("clase.php"); 

    // Verificamos si la cuenta está bloqueada temporalmente
    if(isset($_SESSION['bloqueado_hasta']) && $_SESSION['bloqueado_hasta'] > time()) {
        $tiempo_restante = $_SESSION['bloqueado_hasta'] - time();
        echo "Tu cuenta está bloqueada temporalmente. Intenta nuevamente en $tiempo_restante segundos.";
        exit;
    }

    // Verificamos si hay un error previo almacenado en sesión
    if(isset($_SESSION['error'])) {
        $_SESSION['error'] += 1; // Incrementamos el contador de intentos fallidos
    } else {
        $_SESSION['error'] = 1; // Inicializamos el contador de intentos fallidos
    }

    // Verificamos si se han excedido los 3 intentos fallidos
    if($_SESSION['error'] >= 3) {
        $_SESSION['bloqueado_hasta'] = time() + 300; // Bloqueamos la cuenta por 5 minutos (300 segundos)
        $_SESSION['error'] = 0; // Reiniciamos el contador de errores
        header("location: plantilla.php?error=error-1"); // Redirigimos con error
        exit;
    }

    // Verificamos las credenciales de inicio de sesión
    $resultado_verificacion = login::verificar($doc, $co);

    if($resultado_verificacion) {
        // Si la verificación es exitosa, reiniciamos los contadores y redirigimos
        $_SESSION['error'] = 0;
        unset($_SESSION['bloqueado_hasta']); // Limpiamos la variable de bloqueo

        $_SESSION['documento'] = $doc; // Guardamos el documento en sesión (opcional)
        header("location: controlador.php?seccion=seccion3");
        exit; 
    } else {
        // Si la verificación falla, incrementamos el contador de errores y redirigimos con error
        echo("error no puedes ingresar");
        exit;
    }
} else {
    // Si no se proporcionaron usuario y contraseña
    echo "Error: Debes proporcionar usuario y contraseña.";
    exit; 
}
?>









