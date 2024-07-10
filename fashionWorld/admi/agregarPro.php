<br><br><div class="card">
    <div class="image-preview">
      <img id="preview" src="#" alt="Vista previa de la imagen">
    </div>
    <div class="card-content">
      <h2>Agregar Producto</h2>
      <form action="ctroAdmi.php?" enctype="multipart/form-data" >
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
          <textarea id="descripcion" name="descripcion" filas="4"></textarea>
        </div>
        <input type="file" id="imagen" name="imagen" accept="image/*" onchange="previewImage()"><br><br>
        <input type="submit" name="crear" value="Agregar Producto"><br>
      </form>
    </div>
  </div>
  <script src="../js/imgPrevia.js"></script>
  
  
  