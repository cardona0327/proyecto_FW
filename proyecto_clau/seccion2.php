<style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            width: 420px;
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
<head>
    <title><?php echo "registro" ?></title>
</head>
<div class="container">
        <div class="form-container">
            <h1>Registrarse</h1>
            <form action="guardar.php"><br>
                <input type="number" name="doc" placeholder="Documento"><br><br>
                <input type="text" name="nombre" placeholder="Nombre"><br><br>
                <input type="text" name="apellido" placeholder="Apellido"><br><br>
                <input type="text" name="correo" placeholder="correo"><br><br>
                <input type="text" name="contraseña" placeholder="contraseña"><br><br>
                <input type="date" name="fecha" placeholder="Fecha de nacimiento"><br><br>
                <input type="submit">
            </form>
        </div>
</div>

