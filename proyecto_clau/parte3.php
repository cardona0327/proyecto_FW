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
    <div class="image-preview">
      <img id="preview" src="#" alt="Vista previa de la imagen">
    </div>
    <div class="card-content">
      <h2>Agregar Producto</h2>
      <form action="guardarPro.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="id_producto">ID_producto:</label>
          <input type="number" id="id_producto" name="id_producto">
        </div>
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre">
        </div>
        <div class="form-group">
          <label for="precio">Precio:</label>
          <input type="number" id="precio" name="precio">
        </div>
        <div class="form-group">
          <label for="cantidad">Cantidad:</label>
          <input type="number" id="cantidad" name="cantidad">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripción:</label>
          <textarea id="descripcion" name="descripcion" rows="4"></textarea>
        </div>
        <div class="form-group">
          <label for="nombre">ID categoría:</label>
          <input type="number" id="categoria" name="categoria">
        </div>
        <input type="file" id="imagen" name="imagen" accept="image/*" onchange="previewImage()"><br><br>
        <input type="submit" value="Agregar Producto"><br>
      </form>
    </div>
  </div>
  <script>
    function previewImage() {
      const preview = document.querySelector('#preview');
      const file = document.querySelector('input[type=file]').files[0];
      const reader = new FileReader();

      reader.addEventListener('load', function() {
        preview.src = reader.result;
        preview.style.display = 'block';
      }, false);

      if (file) {
        reader.readAsDataURL(file);
      }
    }
  </script>