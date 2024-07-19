<?php

class Modelo{

    public static function sqlLoguin($documento,$contraseña){
        include("db_fashion/cb.php");
        $sql ="SELECT count(*) from tb_usuarios ";
        $sql .= "where documento='$documento' and contraseña='$contraseña'";
        return $resultado = $conexion->query($sql);

    }
    public static function sqlRegistar($documento,$nombre,$apellido,$correo,$contraseña,$fecha){
        include("db_fashion/cb.php");
        $sql = "insert into tb_usuarios(documento,nombre,apellido,correo,contraseña,fecha,rol)";
        $sql .= "values('$documento','$nombre','$apellido','$correo','$contraseña','$fecha','1')";
        // echo $sql;
        return $resultado = $conexion->query($sql); 
        
    }

    public static function sqlPerfil($id){
        include("db_fashion/cb.php");
        $sql = "select * from tb_usuarios where documento = '$id'";
        // echo $sql;
        return $resultado = $conexion->query($sql); 
        
    }
    public static function sqlRol($id){
        include("db_fashion/cb.php");
        $sql = "select rol from tb_usuarios ";
        $sql .= "where documento = '$id'";
        // echo $sql;
        return $resultado = $conexion->query($sql); 
        
    }
    public static function sqlAgregarPro($id_pro, $nombre, $precio, $cantidad, $descripcion, $imagen) {
        include("db_fashion/cb.php");
        $sql = "INSERT INTO tb_productos(id_producto, nombre_producto, precio, cantidad, detalles, imagen) ";
        $sql .= "VALUES ('$id_pro', '$nombre', '$precio', '$cantidad', '$descripcion', '$imagen')";
        return $resultado = $conexion->query($sql); 
    }

    public static function sqlMostrarPro($buscar=null) {
        include("db_fashion/cb.php");
        $sql = "select * from tb_productos ";
        $sql .= "where nombre_producto  like'%$buscar%'";   
        return $resultado = $conexion->query($sql);
        
    }

    public static function sqlAgregarCate($id_categoria, $categoria) {
        include("db_fashion/cb.php");
        $sql = "INSERT INTO tb_categoria(id_categoria, categoria) "; 
        $sql .= "VALUES ('$id_categoria', '$categoria')";
        return $resultado = $conexion->query($sql);    
    }
    public static function sqlVerCate() {
        include("db_fashion/cb.php");
        $sql = "SELECT * FROM tb_categoria"; // Consulta para seleccionar todas las categorías
        return $resultado = $conexion->query($sql);
    }
    
    
 
    public static function sqlEliminarPro($id) {
        include("db_fashion/cb.php");
        $sql = "DELETE FROM tb_productos WHERE id_producto = '$id'";
        return $resultado = $conexion->query($sql);
    }

    public static function sqlEliminarCate($id) {
        include("db_fashion/cb.php");
        $sql = "DELETE FROM tb_categoria WHERE id_categoria = '$id'";
        return $resultado = $conexion->query($sql);
    }
    

    public static function sqlCategorias($des,$idCate){
        include("db_fashion/cb.php");
        $dato = "";
        if($des==1)$dato = "categoria";
        $sql = "select $dato from tb_categoria ";
        $sql .= "where id_categoria = '$idCate'";
        return $resultado = $conexion->query($sql);
        

    }

    public static function sqlEditar($id_categoria,$categoria){
        include_once("productos_class.php");
        include("db_fashion/cb.php");
        $sql = "update tb_categoria  set categoria = '$categoria' ";
        $sql .= "where id_categoria = '$id_categoria' ";
        return $resultado = $conexion->query($sql);
    }


    public static function sqlEliminarUser($id){
        include("db_fashion/cb.php");
        $sql = "delete from tb_usuarios ";
        $sql .= "where documento = '$id'";
        return $resultado = $conexion->query($sql);
    }

    public static function sqlDatoPro($des,$idPro){
        include("db_fashion/cb.php");
        $dato = 0;
        if($des==1)$dato = "nombre_producto";
        if($des==2)$dato = "precio";
        if($des==3)$dato = "cantidad";
        if($des==4)$dato = "detalles";
        if($des==5)$dato = "imagen";
        $sql = "select $dato from tb_productos ";
        $sql .= "where id_producto = '$idPro'";
        return $resultado = $conexion->query($sql);
    }

    public static function sqlEditarPro($id_producto,$nombre,$precio,$cantidad,$detalles,$imagen){
        include("db_fashion/cb.php");
        include_once("productos_class.php");
        $sql = "update tb_productos ";
        $sql .= "set nombre_producto = '$nombre', precio = '$precio', cantidad= '$cantidad', detalles = '$detalles', imagen = '$imagen' ";
        $sql .= "where id_producto = '$id_producto'";
        return $resultado = $conexion->query($sql);
    }

    public static function sqlConteoEli(){
        include("db_fashion/cb.php");
        $sql = "select * from tb_conteo ";
        return $resultado = $conexion->query($sql);
    }
    public static function sqlConteoReg(){
        include("db_fashion/cb.php");
        $sql = "select * from tb_conteo_reg ";
        return $resultado = $conexion->query($sql);
    }
    public static function sqlConteoPro(){
        include("db_fashion/cb.php");
        $sql = "select * from tb_conteo_productos";
        return $resultado = $conexion->query($sql);
    }
   
    
}
