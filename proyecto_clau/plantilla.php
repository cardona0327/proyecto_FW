<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
  </head>
  <body>
  <!-- class="navbar navbar-expand-lg navbar-light bg-light" -->
    <nav  class="navbar navbar-expand-lg navbar-light" style="background-color: #7ED0D8;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FASHION WORLD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Menú 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Tus favoritos</a></li>
            <li><a class="dropdown-item" href="#">Carrito</a></li>
            <li><a class="dropdown-item" href="#">Fechas especiales</a></li>
            <li><a class="dropdown-item" href="#">Mi perfil</a></li>
            <li><a class="dropdown-item" href="admi.php">ADMINISTRADOR</a></li>
            <li><a class="dropdown-item" href="cerrarSe.php">Cerrar sesión</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="controlador.php?seccion=seccion1">iniciar sesión</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="controlador.php?seccion=seccion2">Registrar</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page"  href="controlador.php?seccion=seccion3">Saludar</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="controlador.php?seccion=seccion4">Video</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="controlador.php?seccion=seccion6">Ver</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="https://www.sena.edu.co" target="blank">Ir al Sena</a></li>
                </ul>
      </ul>
    </div>
  </div>
</nav>
        
</body>
            
        
        
        
            <!-- Se declara un contenedor fila y después un contenedor columna. LAs columnas deben sumar 12, según la rejilla Bootstrap. -->
<div class="container">
              
<?php
        
  include( $seccion.".php" );
        
?>
</div>
        
        
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-MW395SN41J"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-MW395SN41J');
        </script>
        
        </body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>