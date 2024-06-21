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
<head>
    <title><?php echo "inicio de sesión" ?></title>
</head>
<div class="container">
        <div class="form-container">
            <h1>Iniciar sesión</h1>
            <form action="guardari.php">
                <input type="number" name="documento" placeholder="Usuario"><br><br>
                <input type="password" name="contraseña" placeholder="Contraseña"><br><br>
                <input type="submit" value="Ingresar">
            </form>
        </div>
</div>



