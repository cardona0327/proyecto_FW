<head>
    <title><?php echo "Eliminar productos" ?></title>
</head>
<div class="row">
<?php 
    if(isset($_GET['id_producto']) && $_GET['id_producto']>0){
        echo "bienvenido";
    }else{
        header("location:controlad.php?parte=parte6&mensaje=0");
    }
?>


<!-- $id = $_GET['id_producto'];
include("clase.php");
echo(login::eliminarPro($id)) -->