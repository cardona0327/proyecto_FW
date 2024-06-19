<head>
    <title><?php echo "Eliminar productos" ?></title>
</head>
<div class="row">
<?php 
$id = $_GET['id_producto'];
include("clase.php");
echo(login::eliminarPro($id))
?>

</div>
