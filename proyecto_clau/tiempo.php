<?php
// Ejemplo de cómo usar la clase Usuario para iniciar sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login::login($username, $password)) {
        // Inicio de sesión exitoso, redirecciona a la página principal
        header("location:controlador.php?seccion=seccion3");
        exit();
    } else {
        // Error en las credenciales, redirecciona de vuelta al formulario de inicio de sesión con el error
        header("Location: login.php?error=error-1");
        exit();
    }
}
?> 