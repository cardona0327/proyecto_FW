<?php
  if(isset($_GET['mensaje'])){
    if($_GET['mensaje']==0){
      ?><script>
      window.onload = function(){
        alertaEliminar(0);
      }  
      </script><?php
    }
  }

?>

<br><br><div class="card">
    <div class="card-content">
      <h2>Eliminar producto</h2>
      <form action="parte5.php" enctype="multipart/form-data" id="formu">
        <div class="form-group">
          <label for="id_producto">ID_producto:</label>
          <input type="number" id="id_producto" name="id_producto">
        </div>
        <input type="submit" value="Eliminar" id="borra"><br>
      </form>
    </div>

    <!-- <p  style="display: none;"></p> -->
    <!-- <script>
        window.onload = function(){
            alerta();
        }


    </script> -->

    
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
