<head>
    <title><?php echo "Eliminar productos" ?></title>
</head>
<div class="row">
<?php 
$id_categoria = $_GET['id_categoria'];
$categoria = $_GET['categoria'];
include("clase.php");
echo(login::AgregarCategoria($id_categoria,$categoria))
?>

</div>