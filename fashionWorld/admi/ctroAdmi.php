<?php
include("../method/productos_class.php");
if(!isset($_SESSION))session_start();

//esto es para crear un producto
if(isset($_GET['crear'])){
    $id_pro = $_GET['id_producto'];
    $nombre = $_GET['nombre'];
    $precio = $_GET['precio'];
    $cantidad = $_GET['cantidad'];
    $descripcion = $_GET['descripcion'];
    $imagen = $_GET['imagen'];
    if( Productos::agregarPro($id_pro, $nombre, $precio, $cantidad, $descripcion, $imagen) == 1){
        header("location:ctroBar.php?seccion=verPro");
    }
}

//esto es para categoria
if(isset($_GET['agreCate'])){
    $id_categoria = $_POST['id_categoria'];
    $categoria = $_POST['categoria'];
    Productos::agregarCate($id_categoria,$categoria);
}

//esto es para eliminar categoria
if(isset($_GET['idCateEliminar'])){
    if(Productos::eliminarCate($_GET['idCateEliminar'])==1){
        echo Productos::mostrarCate(); 
    }else{
        echo 0;
    }
}

//Elimina producto
if(isset($_GET['idProEliminar'])){
    // echo $_GET['idProEliminar'];
    if(Productos::eliminarPro($_GET['idProEliminar'])==1){
        echo Productos::mostrarPro(); 
    }else{
        echo 0;
    }
}

//Acualizar categoria
if(isset($_GET['ediCate'])){
    $categoria = $_POST['categoria'];
    $id_categoria = $_GET['dato'];
    Productos::editarCategoria($id,$categoriaN);
}
