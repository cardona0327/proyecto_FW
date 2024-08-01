<form action="ctroAdmi.php?ediUser=ola&dato=<?php echo $_GET['dato']; ?>" class="row g-3" method="post" >
  <div class="col-auto">
    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre Producto" value="<?php echo isset($_GET['dato']) ? htmlspecialchars(Productos::actualizDatosUser(1, $_GET['dato'])) : ''; ?>">
  </div><br>
  <div class="col-auto">
    <input type="text" name="apellido" class="form-control" id="apellido" placeholder="apellido" value="<?php echo isset($_GET['dato']) ? htmlspecialchars(Productos::actualizDatosUser(2, $_GET['dato'])) : ''; ?>">
  </div><br>
  <div class="col-auto">
    <input type="email" name="correo" class="form-control" id="correo" placeholder="cantidad" value="<?php echo isset($_GET['dato']) ? htmlspecialchars(Productos::actualizDatosUser(3, $_GET['dato'])) : ''; ?>">
  </div><br>
  <div class="col-auto">
    <input type="password" name="contraseña" class="form-control" id="contraseña" placeholder="Detalles" value="<?php echo isset($_GET['dato']) ? htmlspecialchars(Productos::actualizDatosUser(4, $_GET['dato'])) : ''; ?>">
  </div><br>
  <div class="col-auto">
    <input type="date" name="fecha" class="form-control" id="fecha" placeholder="Detalles" value="<?php echo isset($_GET['dato']) ? htmlspecialchars(Productos::actualizDatosUser(4, $_GET['dato'])) : ''; ?>">
  </div><br>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Actualizar Producto</button>
  </div>
</form>



