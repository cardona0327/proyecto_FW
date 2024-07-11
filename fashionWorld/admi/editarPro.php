<br><br><b>
<form action="ctroAdmi.php?ediPro=ola&dato=<?php echo $_GET['dato']; ?>"class="row g-3" method="post">
<center><div class="col-auto">
<!-- <input type="text" name="id_categoria" class="form-control" id="id_categoria" placeholder="id">
  </div><br> -->
  <div class="col-auto">
    <input type="text" name="nombre" class="form-control" id="producto" placeholder="Nombre" value="<?php if(isset($_GET['dato']))echo Productos::editarCate(1,$_GET['dato'])  ?>">
  </div><br>
  <div class="col-auto">
    <input type="text" name="precio" class="form-control" id="precio" placeholder="precio" value="">
  </div><br>
  <div class="col-auto">
    <input type="text" name="cantidad" class="form-control" id="producto" placeholder="cantidad" value="">
  </div><br>
  <div class="col-auto">
    <input type="text" name="producto" class="form-control" id="producto" placeholder="Nombre" value="">
  </div><br>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Actualizar Producto</button>
  </div></center>
</form>