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
        include("modelo.php");
        $salida = "";
        $consulta = Modelo::sqlVerCate();
    
        // Verifica si hay resultados
        if ($consulta->num_rows > 0) {
            // Muestra las categorías utilizando un ciclo while
            while ($fila = $consulta->fetch_assoc()) {
                $salida .=  "<div class='categoria-item' style='position: relative;'>"; 
                $salida .=  "<div class='categoria-id'>" . $fila['id_categoria'] . "</div>";
                $salida .=  "<div class='categoria-titulo'>" . $fila['categoria'] . "</div>";
                $salida .=  "<button class='editar-btn top-left' onclick='editar()'>Editar</button>"; 
                $salida .=  "</div>";
            }
        } else {
            $salida .=  "No se encontraron categorías.";
        }
        return $salida;
    
        $conexion->close(); // Cierra la conexión a la base de datos
    }

    public static function buscarPro($nombre){
        include_once("modelo.php");
        $consulta = Modelo::sqlBuscarPro($nombre);
        return $consulta;
    }
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
    


}