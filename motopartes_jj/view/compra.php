<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ejemplo de Formulario de Compra con Bootstrap 5</title>
  <!-- Bootstrap 5 CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/estilo9.css">
</head>

<body>

<header class="w-100 header-principal">
  <div class="GAVIGOL">
    <img src="../img/logol.png" alt="IMAGEN DE LOGO" style="max-width: 150px; height: auto;">
  </div> 
  <nav>
    <!-- Aquí puedes colocar tus elementos de navegación si es necesario -->
  </nav>
</header>

<main>
  <div class="container">
    

    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Tu carrito</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Nombre del producto</h6>
              <small class="text-muted">Descripción breve</small>
            </div>
            <span class="text-muted">$12</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Segundo producto</h6>
              <small class="text-muted">Descripción breve</small>
            </div>
            <span class="text-muted">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Tercer ítem</h6>
              <small class="text-muted">Descripción breve</small>
            </div>
            <span class="text-muted">$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Código promocional</h6>
              <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">-$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$20</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Código promocional">
            <div class="input-group-append">
              <button type="submit" class="btn btn-secondary">Aplicar</button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Dirección de facturación</h4>
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">Nombre</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                El nombre es requerido.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Apellido</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                El apellido es requerido.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="username">Usuario</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" id="username" placeholder="Usuario" required>
              <div class="invalid-feedback" style="width: 100%;">
                Se requiere un nombre de usuario.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Correo electrónico <span class="text-muted">(Opcional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="tucorreo@ejemplo.com">
            <div class="invalid-feedback">
              Por favor, introduce una dirección de correo electrónico válida para actualizaciones de envío.
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Dirección</label>
            <input type="text" class="form-control" id="address" placeholder="Calle Principal 1234" required>
            <div class="invalid-feedback">
              Por favor, introduce tu dirección de envío.
            </div>
          </div>

          <div class="mb-3">
            <label for="address2">Dirección 2 <span class="text-muted">(Opcional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartamento o suite">
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="country">País</label>
              <select class="custom-select d-block w-100" id="country" required>
                <option value="">Selecciona...</option>
                <option>Estados Unidos</option>
              </select>
              <div class="invalid-feedback">
                Por favor, selecciona un país válido.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="state">Estado</label>
              <select class="custom-select d-block w-100" id="state" required>
                <option value="">Selecciona...</option>
                <option>California</option>
              </select>
              <div class="invalid-feedback">
                Por favor, introduce un estado válido.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="zip">Código Postal</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Se requiere el código postal.
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="same-address">
            <label class="custom-control-label" for="same-address">La dirección de envío es la misma que la de facturación</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Guardar esta información para la próxima vez</label>
          </div>
          <hr class="mb-4">

          <h4 class="mb-3">Método de Pago</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="credit">Tarjeta de crédito</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="debit">Tarjeta de débito</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="paypal">PayPal</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Nombre en la tarjeta</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Nombre completo, como se muestra en la tarjeta.</small>
              <div class="invalid-feedback">
                El nombre en la tarjeta es requerido.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Número de la tarjeta de crédito</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                El número de la tarjeta es requerido.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Fecha de Expiración</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                La fecha de expiración es requerida.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-cvv">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                El código de seguridad es requerido.
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Continuar para finalizar la compra</button>
        </form>
      </div>
    </div>
  </div>
</main>

<!-- Bootstrap 5 JS y Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-p9m7uHb5NZ4vQvVR8FD8u7Hllz/80LpX8+8fsQXvZg2J6CEZ9s3PBDV9ksg9vGfr" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-2U7ClX41S46vLRM4Uc8ROlm7uB3wKGtvI1yyE9uZ6wvK2zF5k7L5tcRJahSYp3z" crossorigin="anonymous"></script>
</body>
</html>
