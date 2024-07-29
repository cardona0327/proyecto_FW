<?php
class Productos{

    public static function mostrarPro($buscar=null) {
        include_once("modelo.php");
        $salida = "";
        $salida .= '<div class="productos-container">';
        $consulta = Modelo::sqlMostrarPro($buscar);
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
                    $salida .= '<img src="'.$rutaImagen.'" alt="Imagen" class="producto-imagen"><br><br>';
                } else {
                    $salida .= "No se encontró ninguna imagen para este producto.<br>";
                }
                // Agregar el botón
                $salida .= "<a href='ctroBar.php?dato=".$fila['id_producto']."&seccion=editarPro' class='btn btn-success'>Editar</a>";
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
                $salida .=  "<a href='ctroBar.php?seccion=editarCate&dato=" .$fila['id_categoria']."'  class='editar-btn top-left' >Editar</a>"; 
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
        $salida = 0;
        $consulta = Modelo::sqlAgregarPro($id_pro, $nombre, $precio, $cantidad, $descripcion, $imagen);
        if($consulta){
            $salida = 1;
        }
        return $salida;

    }
    public static function agregarCate($id_categoria, $categoria){
        include_once("modelo.php");
        $consulta = Modelo::sqlAgregarCate($id_categoria, $categoria);
        if($consulta){
            header("location:ctroBar.php?seccion=verCate");
        }

    }
    public static function editarCate($des,$categoria){
        $salida = "";
        include_once("modelo.php");
        $consulta = Modelo::sqlCategorias($des,$categoria);
        while($fila = $consulta->fetch_array()){
            $salida .= $fila[0];

        }
        return $salida;
        
       
    }
    
    public static function editarCategoria($id_categoria,$categoria){
        include_once("modelo.php");
        $salida = 0;
        $consulta = Modelo::sqlEditar($id_categoria,$categoria);
        if($consulta){
            $salida = 1;
        }
        return $salida;
    }

    public static function EliminarUser($id){
        include_once("modelo.php");
        $salida = 0;
        $consulta = Modelo::sqlEliminarUser($id);
        if($consulta){
            $salida = 1;
        }
        return $salida;
    }

    public static function datoPro($des,$idPro){
        include_once("modelo.php");
        $salida = "";
        $consulta = Modelo::sqlDatoPro($des,$idPro);
        while($fila = $consulta->fetch_array()){
            $salida .= $fila[0];
        }
        return $salida; 
    }

    public static function editarProducto($id_producto,$nombre,$precio,$cantidad,$detalles,$imagen){
        include_once("modelo.php");
        $salida = 0;
        $consulta = Modelo::sqlEditarPro($id_producto,$nombre,$precio,$cantidad,$detalles,$imagen);
        if($consulta){
            $salida = 1;
        }
        return $salida;
    }

    public static function buscarPro($nombre){
        include_once("modelo.php");
        $salida = 0;
        $consulta = Modelo::sqlBuscarPro($nombre);
        if($consulta){
            $salida = 1;
        }
        return $salida;
    }

    public static function mostrarConteoEli(){
        include_once("modelo.php");
        $salida = "<br><br><table class='conteo-table'>";
        $consulta = Modelo::sqlConteoEli();
        while($fila= $consulta->fetch_assoc()){
            $salida .= "<tr>"; 
            $salida .= "<td>" .$fila['id_conteo']. "</td>";
            $salida .= "<td>" .$fila['descripcion']. "</td>";
            $salida .= "<td>" .$fila['conteo']. "</td>";
            $salida .= "<td>" .$fila['fec_eli']. "</td>";
            $salida .= "</tr>";
        }
        $salida .= "</table>";
        return $salida; 
    }

    public static function mostrarConteoReg(){
        include_once("modelo.php");
        $salida = "<br><br><table class='conteo-table'>";
        $consulta = Modelo::sqlConteoReg();
        while($fila= $consulta->fetch_assoc()){
            $salida .= "<tr>"; 
            $salida .= "<td>" .$fila['id_conteo']. "</td>";
            $salida .= "<td>" .$fila['descripcion']. "</td>";
            $salida .= "<td>" .$fila['docUser']. "</td>";
            $salida .= "<td>" .$fila['conteo']. "</td>";
            $salida .= "<td>" .$fila['fec_reg']. "</td>";
            $salida .= "</tr>";
        }
        $salida .= "</table>";
        return $salida; 
    }

    public static function mostrarConteoProductos(){
        include_once("modelo.php");
        $salida = "";
        $salida = "<br><br><table class='conteo-table'>";
        $consulta = Modelo::sqlConteoPro();
        while($fila = $consulta->fetch_assoc()){
            $salida .= "<tr>"; 
            $salida .= "<td>" .$fila['id_conteo']. "</td>";
            $salida .= "<td>" .$fila['descripcion']. "</td>";
            $salida .= "<td>" .$fila['docPro']. "</td>";
            $salida .= "<td>" .$fila['conteo']. "</td>";
            $salida .= "<td>" .$fila['fec_eli']. "</td>";
            $salida .= "</tr>";
        }
        $salida .= "</table>";
        return $salida;
    }

    public static function buscarUsuario($des,$busqueda){
        include_once("modelo.php");
        $salida = "";
        $consulta = Modelo::sqlBuscarUser($des,$busqueda);
        if($consulta->num_rows > 0){
            while($fila = $consulta->fetch_assoc()){
                $salida .= $fila['nombre'];
                $salida .= $fila['apellido'];
                $salida .= $fila['correo'];
                $salida .= $fila['fecha'];
            }
        
        }else{
            $salida .= "no se encontró ningun usuario con esta busqueda";
        }
        return $salida;
    }
}

