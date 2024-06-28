<style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            width: 350px;
            padding: 30px;
            background-color: #F0F0F0;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #ff3366;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>

<?php
session_start(); // Inicia la sesión al inicio del archivo

if(isset($_GET['error'])){
    if($_GET['error'] == "error-1"){
        if(!isset($_SESSION['stop'])) {
            $_SESSION['stop'] = 0;
        }
        $_SESSION['stop'] += 1;
    }
}

// Verificamos si la cuenta está bloqueada temporalmente
if(isset($_SESSION['bloqueado_hasta']) && $_SESSION['bloqueado_hasta'] > time()) {
    $tiempo_restante = $_SESSION['bloqueado_hasta'] - time();
    echo "Tu cuenta está bloqueada temporalmente. Intenta nuevamente en $tiempo_restante segundos.";
    exit;
}
?>


    <div class="container">
        <div class="form-container">
            <h1>Iniciar sesión</h1>
            <form action="guardari.php" method="post"> <!-- Ajusta la acción del formulario según tu script de procesamiento -->
                <input type="text" name="documento" placeholder="Usuario" required><br><br>
                <input type="password" name="contraseña" placeholder="Contraseña" required><br><br>
                <input type="submit" value="Ingresar">
            </form>
            <?php
            // Mostrar mensaje de error si existe
            if(isset($_GET['error']) && $_GET['error'] == "error-1") {
                echo "<p>Error: Usuario o contraseña incorrectos. Intento fallido número {$_SESSION['stop']}.</p>";
            }
            ?>
        </div>
    </div>









