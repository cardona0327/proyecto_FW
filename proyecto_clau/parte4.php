<style>
.productos-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Ajusta el ancho mínimo y máximo de cada columna */
    gap: 20px; /* Espacio entre las columnas de los productos */
}

.producto {
    background-color: #f9f9f9; /* Color de fondo para resaltar cada producto */
    padding: 10px; /* Espacio interno alrededor de cada producto */
    border-radius: 5px; /* Bordes redondeados para cada producto */
}

.producto-imagen {
    width: 50%; /* La imagen ocupa todo el ancho del contenedor del producto */
    height: 50%; /* Altura automática para mantener la proporción */
    border-radius: 5px; /* Bordes redondeados para la imagen */
}



</style>

<head>
    <title><?php echo "ver productos" ?></title>
</head>
<div class="row">
<?php 

include("clase.php");
echo(login::mostrarPro())
?>

</div>