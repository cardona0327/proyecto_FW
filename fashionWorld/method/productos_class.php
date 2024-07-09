<?php
class Productos{

    public static function mostrarPro() {
        include_once("modelo.php");
        $salida = "";
        $salida .= '<div class="productos-container">';
        $consulta = Modelo::sqlMostrarPro();
        if ($consulta->num_rows > 0) {
            while($fila = $consulta->fetch_assoc()) {
                $salida .= '<div class="producto">';
                $salida .=  "ID Producto: " . $fila['id_producto'] . "<br>";
                $salida .=  "Nombre: " . $fila['nombre_producto'] . "<br>";
                $salida .=  "Precio: " . $fila['precio'] . "<br>";
                $salida .=  "Cantidad: " . $fila['cantidad'] . "<br>";
                $salida .=  "Detalles: " . $fila['detalles'] . "<br>";
                $salida .=  "Imagen: <br>";
    
                // Verificar si la ruta de la imagen no está vacía
                if (!empty($fila['imagen'])) {
                    // Construir la ruta relativa de la imagen
                    $rutaImagen = "../imagenes/" . $fila['imagen'];
                    
                    // Mostrar la imagen
                    $salida .= '<img src="'.$rutaImagen.'" alt="Imagen" class="producto-imagen"><br>';
                } else {
                    $salida .= "No se encontró ninguna imagen para este producto.<br>";
                }
    
                $salida .= '</div>';
            }
        } else {
            $salida .= "No se encontraron productos.";
        }
    
        $salida .= '</div>';
        return $salida;
    }

    public static function mostrarCate() {
        include_once("modelo.php");
        $salida = "";
        $consulta = Modelo::sqlVerCate();
    
        // Verifica si hay resultados
        if ($consulta->num_rows > 0) {
            // Muestra las categorías utilizando un ciclo while
            while ($fila = $consulta->fetch_assoc()) {
                $salida .=  "<div class='categoria-item' style='position: relative;'>"; 
                $salida .=  "<div class='categoria-id'>" . $fila['id_categoria'] . "</div>";
                $salida .=  "<div class='categoria-titulo'>" . $fila['categoria'] . "</div>";
                $salida .=  "<a href='ctroBar.php?seccion=editarCate' class='editar-btn top-left' >Editar</a>"; 
                $salida .=  "</div>";
            }
        } else {
            $salida .=  "No se encontraron categorías.";
        }
        return $salida;
    
        $conexion->close(); // Cierra la conexión a la base de datos
    }

    // public static function buscarPro($nombre){
    //     include_once("modelo.php");
    //     $consulta = Modelo::sqlBuscarPro($nombre);
    //     return $consulta;
    // }
    public static function eliminarPro($id){
        $salida = 0;
        include_once("modelo.php");
        $consulta = Modelo::sqlEliminarPro($id);
        if($consulta){
            $salida = 1;
        }else{
            $salida = 0;
        }
        return $salida;
    }
    
    public static function eliminarCate($id){
        $salida = 0;
        include_once("modelo.php");
        $consulta = Modelo::sqlEliminarCate($id);
        if($consulta){
            $salida = 1;
        }else{
            $salida = 0;
        }
        return $salida;
    }


    public static function agregarPro($id_pro, $nombre, $precio, $cantidad, $descripcion, $imagen){
        include_once("modelo.php");
        $consulta = Modelo::sqlAgregarPro($id_pro, $nombre, $precio, $cantidad, $descripcion, $imagen);
        if($consulta){
            header("location:ctroBar.php?seccion=verPro");
        }

    }
    public static function agregarCate($id_categoria, $categoria){
        include_once("modelo.php");
        $consulta = Modelo::sqlAgregarCate($id_categoria, $categoria);
        if($consulta){
            header("location:ctroBar.php?seccion=verCate");
        }

    }
    // public static function editarCate($id,$categoriaN){
    //     $salida = "";
    //     include_once("modelo.php");
    //     $consulta = Modelo::sqlActuCate($id,$categoriaN);
    //     if($consulta){

    //     }
    // }

    public static function categorias($op){
        include_once("modelo.php");
        $consulta = Modelo::sqlCategorias($op);
        if ($consulta->num_rows > 0) {
            // Muestra las categorías utilizando un ciclo while
            while ($fila = $consulta->fetch_assoc()) {
                if($op == 1){
                    $salida = $fila['id_producto'];
                 }
                 if($op == 2){
                    $salida = $fila['categoria'];
                 }
            }
        }
    }
}