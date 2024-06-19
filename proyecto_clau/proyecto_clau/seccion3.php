<head>
    <title><?php echo"saludo"; ?></title>
</head>
<?php
if(!isset($_SESSION)) session_start();
if(!isset($_SESSION['documento']) || $_SESSION['documento'] === '') {
    header("location: out.html");
    exit; // Asegúrate de salir del script después de redirigir
}
$documento = $_SESSION['documento']; // Guarda el nombre de usuario en una variable
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        h1 {
            color: black;
        } 
    </style>
</head>

<body>
    <h1><center>Bienvenid@ <?php echo $documento; ?></center></h1> <!-- Imprime el nombre del usuario -->
</body>

</html>