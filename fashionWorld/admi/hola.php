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


//hoy 

if (isset($_GET['ediPro'])) {
    $id_producto = $_GET['dato'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $detalles = $_POST['detalles'];

    // Procesar la imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $ruta_imagen = 'img/productos/' . $_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_imagen);
        // Actualizar la ruta de la imagen en la base de datos
        Productos::editarProducto($id_producto, $nombre, $precio, $cantidad, $detalles, $ruta_imagen);
    } else {
        // No se subió una nueva imagen, actualizar otros campos sin cambios en la imagen
        Productos::editarProducto($id_producto, $nombre, $precio, $cantidad, $detalles, null);
    }

    header("location:ctroBar.php?seccion=verPro");
}

