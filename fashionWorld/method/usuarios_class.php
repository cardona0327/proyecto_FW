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
            $salida .= "<div class='perfil-foto-container'>";
            $foto = !empty($fila['foto']) ? $fila['foto'] : '../imagenes/user.webp';
            $salida .= "<img src='" . $foto . "' alt='Foto de perfil' class='perfil-foto'>";
            $salida .= "<input type='submit' value='Actualizar Perfil'>";
            $salida .= "</div>";
            $salida .= "<div class='perfil-datos'>";
            $salida .= "<div class='perfil-item'><span>Documento:</span> " . $fila['documento'] . "</div>";
            $salida .= "<div class='perfil-item'><span>Nombre:</span> " . $fila['nombre'] . "</div>";
            $salida .= "<div class='perfil-item'><span>Apellido:</span> " . $fila['apellido'] . "</div>";
            $salida .= "<div class='perfil-item'><span>Correo:</span> " . $fila['correo'] . "</div>";
            $salida .= "<div class='perfil-item'><span>Contraseña:</span> " . $fila['contraseña'] . "</div>";
            $salida .= "<div class='perfil-item'><span>Fecha de nacimiento:</span> " . $fila['fecha'] . "</div>";
            $salida .= "<input type='submit' value='actualizar datos'>";
            $salida .= "</div>";
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

    public static function buscarId($email){
        include_once("modelo.php");
        $salida = "";
        $consulta = Modelo::sqlBuscarId($email);
        while($fila = $consulta->fetch_array()){
            $salida = $fila[0];
        }
        return $salida;
    }

    public static function verificaCon($contraseñaN,$doc){
        include_once("modelo.php");
        $consulta = Modelo::verficaClave($contraseñaN,$doc);
        while($fila = $consulta->fetch_array()){
            $salida = $fila[0];
        }
        return $salida;
    }
    
    
    

}
