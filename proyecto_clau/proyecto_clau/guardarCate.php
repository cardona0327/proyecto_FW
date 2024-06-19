<head>
    <title><?php echo "Agregar categorías" ?></title>
</head>
<div class="row">
<?php
include("clase.php");


    $id_categoria = $_GET['id_categoria'];
    $categoria = $_GET['categoria'];
    
    echo login::AgregarCategoria($id_categoria, $categoria);

?>

</div>