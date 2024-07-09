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

    public static function sqlMostrarPro() {
        include("db_fashion/cb.php");
        $sql = "SELECT id_producto, nombre_producto, precio, cantidad, detalles, imagen FROM tb_productos";
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
    
    public static function sqlBuscarPro($nombre){
        include("db_fashion/cb.php");
        $sql = "select * from tb_productos ";
        $sql .= "where nombre_producto like '%a%'";
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
    

    public static function sqlCategorias($op){
        include("db_fashion/cb.php");
        $sql = "select * from tb_categorias";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
            // Muestra las categorías utilizando un ciclo while
            while ($fila = $resultado->fetch_assoc()) {
                if($op == 1){
                    $salida = $fila['id_producto'];
                 }
                 if($op == 2){
                    $salida = $fila['categoria'];
                 }
            }
        }

    }

    public static function sqlActuCate($id,$categoriaN){
        include("db_fashion/cb.php");
        $sql = "update tb_categoria set categoria = '$categoriaN' ";
        $sql .= "where id_categoria = '$id'";
        return $resultado = $conexion->query($sql);

    }


}