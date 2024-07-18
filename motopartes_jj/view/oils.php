<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/estilo3.css">
    <title>Login</title>
</head>
<body>
<header class="w-100 header-principal">
    <div class="logo text-center">
        <img src="../img/logol.png" alt="IMAGEN DE LOGO" class="img-fluid rotated-logo" style="max-width: 200px; height: auto;">
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="viewUser2.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</header>




 <!-- Product List -->
    <!-- Fruits Shop Start -->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-12 text-center">
                        <h1>Repuestos</h1>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <!-- Product Item -->
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="../img/aceites.png" class="img-fluid w-100 rounded-top" alt="Grapes">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Repuestos</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Grapes</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <button class="btn border border-secondary rounded-pill px-3 text-primary add-to-cart"><i class="fa fa-shopping-bag me-2 text-primary"></i> Agregar al carrito</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End -->

    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Abrir Carrito</button>

<!-- Contenedor del offcanvas -->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Carrito de Compras</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul id="cart-items" class="list-group mb-3"></ul>
        <div class="d-flex justify-content-between mb-3">
            <h5>Total:</h5>
            <h5 id="cart-total">$0.00</h5>
        </div>
        <a href="compra.php" class="btn btn-success w-100" id="checkout-btn">Continuar Compra</a>

    </div>
</div>


    <footer class="text-center mt-4">
        <p>&copy; 2024 Mi Empresa. Todos los derechos reservados.</p>
        <div class="publicidad">
            <h3>Publicidad</h3>
            <p>Aquí podría ir tu contenido publicitario.</p>
        </div>
    </footer>

    <script>
        // Función para actualizar el total del carrito
        function updateCartTotal() {
            let total = 0;
            document.querySelectorAll('.cart-item').forEach(item => {
                const price = parseFloat(item.querySelector('.cart-item-price').textContent.replace('$', ''));
                const quantity = parseInt(item.querySelector('.cart-item-quantity').textContent);
                total += price * quantity;
            });
            document.getElementById('cart-total').textContent = `$${total.toFixed(2)}`;
        }

        // Función para añadir productos al carrito
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', () => {
                const productCard = button.closest('.fruite-item');
                const productName = productCard.querySelector('h4').textContent;
                const productPrice = productCard.querySelector('.fs-5').textContent;
                const cartItems = document.getElementById('cart-items');

                // Buscar si el producto ya está en el carrito
                let cartItem = Array.from(cartItems.children).find(item => item.querySelector('.cart-item-name').textContent === productName);

                if (cartItem) {
                    // Incrementar la cantidad del producto si ya está en el carrito
                    const quantityElement = cartItem.querySelector('.cart-item-quantity');
                    quantityElement.textContent = parseInt(quantityElement.textContent) + 1;
                } else {
                    // Añadir nuevo producto al carrito
                    cartItem = document.createElement('li');
                    cartItem.className = 'list-group-item d-flex justify-content-between align-items-center cart-item';
                    cartItem.innerHTML = `
                        <span class="cart-item-name">${productName}</span>
                        <span>
                            <span class="cart-item-quantity">1</span> x <span class="cart-item-price">${productPrice}</span>
                        </span>
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    `;
                    cartItem.querySelector('button').addEventListener('click', () => {
                        cartItem.remove();
                        updateCartTotal();
                    });
                    cartItems.appendChild(cartItem);
                }
                updateCartTotal();
            });
        });

        // Función para finalizar la compra
        document.getElementById('checkout-btn').addEventListener('click', () => {
            alert('Gracias por tu compra!');
            document.getElementById('cart-items').innerHTML = '';
            updateCartTotal();
        });
    </script>

    <!-- JavaScript to handle search functionality -->
    <script>
        document.getElementById('search-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const query = document.getElementById('search-input').value.toLowerCase();
            const products = document.querySelectorAll('.product-item');

            products.forEach(product => {
                const productName = product.getAttribute('data-name').toLowerCase();
                if (productName.includes(query)) {
                    product.style.display = '';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


