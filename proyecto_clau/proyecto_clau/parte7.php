<style>
    .card {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
      background-color: #95A6FF;
    }
    .image-preview {
      width: 200px;
      height: 200px;
      border: 2px dashed #ccc;
      border-radius: 10px;
      margin: 0 auto 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .image-preview img {
      max-width: 100%;
      max-height: 100%;
      border-radius: 10px;
      display: none;
    }
    .card-content {
      padding: 20px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      text-align: left;
      font-weight: bold;
    }
    .form-group input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-group textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
  </style>


<br><br><div class="card">
    <div class="card-content">
      <h2>Agregar Categoría</h2>
      <form action="guardarCate.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="id_categoria">ID de Categoría:</label>
          <input type="number" id="id_categoria" name="id_categoria">
        </div>
        <div class="form-group">
          <label for="categoria">Nombre de la Categoría:</label>
          <input type="text" id="categoria" name="categoria">
        </div>
        <input type="submit" value="Agregar Categoría"><br>
      </form>
    </div>
  </div>

  <!-- <form action="guardarCate.php" method="POST"> -->
 
  