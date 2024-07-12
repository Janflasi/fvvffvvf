<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Document</title>
</head>
<body>
<header class="w-100 header-principal">
        <div class="logo">
            <img src="../img/logol.png" alt="IMAGEN DE LOGO" class="img-fluid rotated-logo" style="max-width: 200px; height: auto;">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>

<div class="video-audio" style="text-align: center;">
     <div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/x4fSOEsy0d0?si=tlSZfgQ1Y0it_HXd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
    <div class="audio-player"> 
        <audio id="audio-player" controls muted>
            <source src="mp3/kawasaki-ninja.mp3" type="audio/mpeg">
        </audio> 
</div>

<section id="nuestros-programas">
    <h2 class="text-center my-4">Categorías</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="carta" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../img/repuestos.png');">
                    <h3 class="text-white">REPUESTOS</h3>
                    <a href="aceites.html"><button class="btn btn-warning">VER +</button></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="carta" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../img/aceites.png');">
                    <h3 class="text-white">ACEITES</h3>
                    <a href="controlador.php?seccion=seccion2"><button class="btn btn-warning">VER +</button></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="carta" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../img/llantas.png');">
                    <h3 class="text-white">LLANTAS</h3>
                    <a href="llantas.html"><button class="btn btn-warning">VER +</button></a>
                </div>
            </div>
        </div>
    </div>
</section>

    <footer class="text-center mt-4">
        <p>&copy; 2024 Mi Empresa. Todos los derechos reservados.</p>
        <div class="publicidad">
            <h3>Publicidad</h3>
            <p>Aquí podría ir tu contenido publicitario.</p>
        </div>
    </footer>
    <!-- Scripts JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</body>
</html>