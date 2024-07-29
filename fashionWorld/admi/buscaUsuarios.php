<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<br><br><div class="card">
    <div class="card-content">
      <h2>Buscar por ID</h2>
      <form action="ctroAdmi.php?buscarU=true" enctype="multipart/form-data" method="post">
        <div class="form-group">
          <label for="id_producto">ingresa el nombre del usuario:</label>
          <input type="number" id="id_usuario" name="busqueda">
        </div>
        <input type="submit" value="buscar"><br>
      </form>
    </div>
  </div>

</body>
</html>