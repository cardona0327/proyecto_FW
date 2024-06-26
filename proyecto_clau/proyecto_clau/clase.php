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
    
    public static function agregarPro($id_pro, $nombre, $precio, $cantidad, $descripcion, $imagen) {
        include "conexion.php";
        $sql = "INSERT INTO tb_productos (id_producto, nombre_producto, precio, cantidad, detalles,imagen) VALUES ('$id_pro', '$nombre', '$precio', '$cantidad', '$descripcion', '$imagen')";
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
    
        $sql = "SELECT id_producto, nombre_producto, precio, cantidad, detalles, imagen FROM tb_productos";
        $resultado = $conexion->query($sql);
    
        echo '<div class="productos-container">';
    
        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                echo '<div class="producto">';
                echo "ID Producto: " . $row['id_producto'] . "<br>";
                echo "Nombre: " . $row['nombre_producto'] . "<br>";
                echo "Precio: " . $row['precio'] . "<br>";
                echo "Cantidad: " . $row['cantidad'] . "<br>";
                echo "Detalles: " . $row['detalles'] . "<br>";
                echo "Imagen: <br>";
    
                // Verificar si la ruta de la imagen no está vacía
                if (!empty($row['imagen'])) {
                    // Construir la ruta relativa de la imagen
                    $rutaImagen = "imagenes/" . $row['imagen'];
                    
                    // Mostrar la imagen
                    echo '<img src="'.$rutaImagen.'" alt="Imagen" class="producto-imagen"><br>';
                } else {
                    echo "No se encontró ninguna imagen para este producto.<br>";
                }
    
                echo '</div>';
            }
        } else {
            echo "No se encontraron productos.";
        }
    
        echo '</div>';
    
        $conexion->close();
    }
    
    
    
    public static function eliminarPro($id) {
        include "conexion.php";
    
        $sql = "DELETE FROM  tb_productos WHERE id_producto = $id";
        $resultado = $conexion->query($sql);
    
        if($resultado){
            return "se ha eliminado el producto correctamente";
        }
    }

    public static function AgregarCategoria($id_categoria, $categoria) {
        include "conexion.php";

    // Usar prepared statements para evitar inyección SQL
        $sql = "INSERT INTO tb_categoria (id_categoria, categoria) VALUES (?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("is", $id_categoria, $categoria); // "is" indica integer y string para los tipos de datos
        $resultado = $stmt->execute();
    
        if ($resultado) {
            header("location:controlad.php?parte=parte8");
        }
    }

    public static function mostrarCate() {
        include "conexion.php";
        
        $salida = "";
        $sql = "SELECT * FROM tb_categoria";
        $resultado = $conexion->query($sql);
        
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $salida .= "ID: " . $fila['id_categoria'] . ", Categoría: " . $fila['categoria'] . "<br>";
            }
        } else {
            $salida = "No hay categorías registradas.";
        }
        
        return $salida;
    }
    


}












