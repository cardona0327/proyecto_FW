<?php
 $id_pro = $_GET['id_producto'];
 $nombre = $_GET['nombre'];
 $precio = $_GET['precio'];
 $cantidad = $_GET['cantidad'];
 $descripcion = $_GET['descripcion'];
 $imagen = $_GET['imagen'];

 include("../method/modelo.php");
    Modelo::sqlAgregarPro($id_pro, $nombre, $precio, $cantidad, $descripcion, $imagen);
  
?>