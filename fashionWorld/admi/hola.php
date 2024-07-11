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

            // Agregar el botón
            $salida .= '<button class="comprar-button">Comprar</button>';

            $salida .= '</div>';
        }
    } else {
        $salida .= "No se encontraron productos.";
    }
    $salida .= '</div>';
    return $salida;
}
