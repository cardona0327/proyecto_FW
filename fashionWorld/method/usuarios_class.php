<?php

class Usuarios{

    // public static function perfilUsuario($id){
    //     include_once("modelo.php");
    //     $salida = "";
    //     $consulta = Modelo::sqlPerfil($id);
    //     while($fila = $consulta->fetch_assoc()){
    //         $salida .= $fila['documento']."<br>";
    //         $salida .= $fila['nombre']."<br>";
    //         $salida .= $fila['apellido']."<br>";
    //         $salida .= $fila['correo']."<br>";
    //         $salida .= $fila['contraseña']."<br>";
    //         $salida .= $fila['fecha']."<br>";
    //     }
    //     return $salida;
    // }

    public static function perfilUsuario($id){
        include_once("modelo.php");
        $salida = "<div class='perfil-container'>";
    
        $consulta = Modelo::sqlPerfil($id);
        while($fila = $consulta->fetch_assoc()){
            $salida .= "<div class='perfil-item'> Documento: " . $fila['documento'] . "</div>";
            $salida .= "<div class='perfil-item'> Nombre: " . $fila['nombre'] . "</div>";
            $salida .= "<div class='perfil-item'> Apellido: " . $fila['apellido'] . "</div>";
            $salida .= "<div class='perfil-item'>Correo: " . $fila['correo'] . "</div>";
            $salida .= "<div class='perfil-item'>Contraseña: " . $fila['contraseña'] . "</div>";
            $salida .= "<div class='perfil-item'>Fecha de nacimiento: " . $fila['fecha'] . "</div>";
        }
    
        $salida .= "</div>"; 
        return $salida;
    }

    public static function eliminarCuentaUser($id){
        include_once("modelo.php");
        $salida = 0;
        $consulta = Modelo::sqlEliminarUser($id);
        if($consulta){
            $salida = 1;
        }
        return $salida;
    }
    
}
