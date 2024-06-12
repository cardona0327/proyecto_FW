<?php

class login{
    public static function registar($documento,$nombre,$apellido,$correo,$contraseña,$fecha){
        include "conexion.php";
        $sql = "insert into tb_usuarios(documento,nombre,apellido,correo,contraseña,fecha)value('$documento','$nombre','$apellido','$correo','$contraseña','$fecha')";
        $consulta = $conexion ->query($sql);
        if($consulta){
            header("location:controlador.php?seccion=seccion6");
        }
    }

    public static function mostrar(){
        include "conexion.php";
        $salida= "";
        $sql = "select * from tb_usuarios;";
        $consulta = $conexion ->query($sql);
        while($fila = $consulta->fetch_assoc())
        {
            $salida.=$fila['documento']."<br>";
            $salida.=$fila['nombre']."<br>";
            $salida.=$fila['apellido']."<br>";
            $salida.=$fila['correo']."<br>";
            $salida.=$fila['contraseña']."<br>";
            $salida.=$fila['fecha']."<br> <br>";
        }
        return $salida;
    }

 
    public static function calcular() {
        include "conexion.php";
        $sql = "SELECT COUNT(*) AS total_usuarios FROM tb_usuarios;";
        $consulta = $conexion->query($sql);
        $resultado = $consulta->fetch_assoc();
        $conexion->close();
        return $resultado['total_usuarios'];
    }

    public static function verificar($doc,$co){
        require("conexion.php");
        $salida ="";
        $sql ="SELECT count(*) from tb_usuarios ";
        $sql .= "where documento='$doc' and contraseña='$co'";
        $resultado = $conexion->query($sql);
        while($fila=$resultado->fetch_array()){
            $salida = $fila[0];
        }
        $conexion->close();
        return $salida; 
    }   


        

    // public static function agregarPr($id_producto,$nombre,$precio,$cantidad,$detalles,$id_categoria,$img){
        // include "conexion.php";
        // $sql = "insert into tb_productos(id_producto,nombre_producto,precio,cantidad,detalles,id_categoría,imagen)value('$id_producto','$nombre','$precio','$cantidad','$detalles','$id_categoria','$img')";
        // $consulta = $conexion ->query($sql);
        // if($consulta){
            // header("location:controlad.php?parte=parte3");
        // }
    // }
    
    public static function agregarPro($id_pro, $nombre, $precio, $cantidad, $descripcion, $id_categoria, $imagen) {
        include "conexion.php";
        $sql = "INSERT INTO tb_productos (id_producto, nombre_producto, precio, cantidad, detalles, id_categoría, imagen) VALUES ('$id_pro', '$nombre', '$precio', '$cantidad', '$descripcion', '$id_categoria', '$imagen')";
        $consulta = $conexion ->query($sql);
        if($consulta){
            header("location:controlad.php?parte=parte4");
        }
        // if ($conexion->query($sql) === TRUE) {
        //    echo "Datos insertados correctamente";
        // } else {
            // echo "Error al insertar datos: " . $conexion->error;
        // }
    
        $conexion->close();
    }
    
    public static function mostrarPro() {
        include "conexion.php";
        
        $sql = "SELECT id_producto, nombre_producto, precio, cantidad, detalles, id_categoría, imagen FROM tb_productos ORDER BY nombre_producto ASC";
        $result = $conexion->query($sql);
    
        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()) {
                echo "ID: " . $row['id_producto'] . "<br>";
                echo "Nombre: " . $row['nombre_producto'] . "<br>";
                echo "Precio: " . $row['precio'] . "<br>";
                echo "Cantidad: " . $row['cantidad'] . "<br>";
                echo "Detalles: " . $row['detalles'] . "<br>";
                echo "ID Categoría: " . $row['id_categoría'] . "<br>";
                
                
                echo "Imagen: <br>";
                echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imagen']).'"/><br><br>';
            }
        } else {
            echo "No se encontraron productos.";
        }
    
        $conexion->close();
    }
}











