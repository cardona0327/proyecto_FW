<div class="row"><br><br>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="nombreUser">
      <button class="btn btn-outline-success"  onclick="buscadorUser()" >Buscar usuario</button>
    </form>
  </div>
</nav>

<div class="row" id="mostrarUser">
<?php
echo Productos::mostrarUsuarios();
?>
</div>


</div>