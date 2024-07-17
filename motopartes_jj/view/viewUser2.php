
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilo5.css">
</head>
<body>
 <!-- Header with Search Form -->
 <header class="w-100 header-principal">
    <div class="GAVIGOL">
        <img src="../img/logol.png" alt="IMAGEN DE LOGO" style="max-width: 150px; height: auto;">
    </div> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="vistaUser.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">
                            <i class="fas fa-user-edit me-2"></i> Editar Perfil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vistaUser.php">
                            <i class="fas fa-sign-out-alt me-2"></i> Cerrar Sesión
                        </a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</header>

    
<main class="container my-4">
    <div class="video-audio text-center">
        <div class="video mb-4">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/x4fSOEsy0d0?si=tlSZfgQ1Y0it_HXd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="audio-player mb-4">
            <audio id="audio-player" controls muted>
                <source src="mp3/kawasaki-ninja.mp3" type="audio/mpeg">
            </audio>
        </div>
    </div>

    <h2 class="text-center my-4">Categorías</h2>
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card text-center" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../img/repuestos.jpg');">
                <h3 class="text-white">REPUESTOS</h3>
                <a href="oils.php"><button class="btn btn-warning">VER +</button></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card text-center" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../img/aceites.png');">
                <h3 class="text-white">ACEITES</h3>
                <a href="controlador.php?seccion=seccion2"><button class="btn btn-warning">VER +</button></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card text-center" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../img/llantas.png');">
                <h3 class="text-white">LLANTAS</h3>
                <a href="llantas.html"><button class="btn btn-warning">VER +</button></a>
            </div>
        </div>
    </div>
</main>

<footer class="text-center mt-4">
    <p>&copy; 2024 Mi Empresa. Todos los derechos reservados.</p>
    <div class="publicidad">
        <h3>Publicidad</h3>
        <p>Aquí podría ir tu contenido publicitario.</p>
    </div>
</footer>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
