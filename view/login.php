<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Login</title>
</head>
<body>
    <header class="w-100 header-principal">
        <div class="logo">
            <img src="../img/logol.png" alt="IMAGEN DE LOGO" class="img-fluid rotated-logo" style="max-width: 200px; height: auto;">
        </div> 
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="register.php">Registrarse </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">iniciar sesion</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
</header>


    <main class="container d-flex justify-content-center align-items-center flex-grow-1" style="min-height: 100vh;">
        <div class="row border rounded-3 p-4 bg-white shadow-lg box-area" style="max-width: 500px;">
            <div class="col-md-12 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4 text-center">
                        <h2>Hola, Bienvenidos a Repuestos JJJ</h2>
                        <p>Estamos felices de tenerte de vuelta.</p>
                    </div>
                    <form action="C_iniciar_sesion.php" method="POST">
                        <input type="hidden" name="action" value="login">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control form-control-lg bg-light fs-5" name="correo" placeholder="Correo" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg bg-light fs-5" name="password" placeholder="Contraseña" required>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <div class="g-recaptcha" data-sitekey="6LfaIgwqAAAAAFjrowWPA5vbDBONVvx83AP2Iv9S" data-size="compact"></div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-lg btn-danger w-100 fs-6" style="background-color: #FF0000;">Iniciar</button>
                    </form>
                    <div class="row mt-3">
                        <div class="col-12 text-center mt-2">
                            <small>¿Olvidaste tu contraseña? <a href="controlador.php?seccion=seccion5" style="color: #FF0000;">Recuperar</a></small>
                        </div>
                    </div>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
