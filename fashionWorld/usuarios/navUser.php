<!doctype html>
<html lang="en">
  <head>
     <!-- Google tag (gtag.js) -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=G-MW395SN41J"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-MW395SN41J');
        </script>
        

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/styProInicio.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
  </head>
  <body>
  <!-- class="navbar navbar-expand-lg navbar-light bg-light" -->
    <nav  class="navbar navbar-expand-lg navbar-light" style="background-color: #7ED0D8;">
  <div class="container-fluid">
    <a class="navbar-brand" href="conBaBus.php?seccion=home">FASHION WORLD</a>
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
            <li><a class="dropdown-item" href="conBaBus.php?seccion=perfil">Mi perfil</a></li>
            <li><a class="dropdown-item" href="admi.php">ADMINISTRADOR</a></li>
            <li><a class="dropdown-item" href="conBaBus.php?seccion=cerrarSe">Cerrar sesión</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="controlador.php?seccion=seccion1">iniciar sesión</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="controlador.php?seccion=seccion2">Registrar</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page"  href="controlador.php?seccion=seccion3">Saludar</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="controlador.php?seccion=seccion4">Video</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="controlador.php?seccion=seccion6">Ver</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="https://www.sena.edu.co" target="blank">Ir al Sena</a></li>
        </ul>
        <form id="formulario"class="d-flex ms-auto">
          <input id="nombre" class="form-control me-2" type="search" placeholder="producto" aria-label="Search">
          <button id="enviar" class="btn btn-outline-success" type="button" >Buscar</button>
        </form>
      </ul>
    </div>
  </div>
</nav>



</div>
        

            
        
        
        
            <!-- Se declara un contenedor fila y después un contenedor columna. LAs columnas deben sumar 12, según la rejilla Bootstrap. -->
        <div class="container">
                    
        <?php
                
        include( $seccion.".php" );
                
        ?>
        </div>
    </body>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/ajax.js"></script>
   
  </body>
</html>