<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de Navegación Personalizada</title>
    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- FontAwesome CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Tu CSS personalizado -->
    <link rel="stylesheet" href="../css/estilo7.css">
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
                <form class="d-flex me-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-bell text-dark me-2"></i> Notificaciones
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <i class="fas fa-tachometer-alt text-dark me-2"></i> Panel de Control
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle text-dark me-2"></i> Administrador
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user-edit me-2"></i> Editar Perfil
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fas fa-sign-out-alt me-2"></i> Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Main Content -->
<main class="content">
    <h1>Bienvenido, Administrador</h1>
    


     <!-- Pega aquí el contenido de tu página -->
     <section id="nuestros-programas">
        <div class="container" style="margin-top: auto;">
            <h2>CATEGORIAS</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="carta" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('imganes/repuestos.jpg');">
                        <h3>REPUESTOS</h3>
                        <a href="agregrar_producto.php"><button class="btn btn-warning">Agregar Producto</button></a>
                        <a href=""><button class="btn btn-warning">VER +</button></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="carta" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('imganes/aceites.png');">
                        <h3>ACEITES</h3>
                        <a href="agregar_producto_aceites.html"><button class="btn btn-warning">Agregar Producto</button></a>
                        <a href="aceites.html"><button class="btn btn-warning">VER +</button></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="carta" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('imganes/llantas.png');">
                        <h3>LLANTAS</h3>
                        <a href="agregar_producto_llantas.html"><button class="btn btn-warning">Agregar Producto</button></a>
                        <a href="llantas.html"><button class="btn btn-warning">VER +</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-muted my-3">
                    &copy; Repuestos JJ
                </div>
                <div class="col-12 text-center text-muted">
                    repuestosjj@gmail.com
                </div>
            </div>
        </div>
    </footer>


    

    <!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
