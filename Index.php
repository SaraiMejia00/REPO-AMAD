<?php

session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en Línea</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Mi Tienda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Carrito</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenido principal -->
<div class="container mt-4">
    <h1 class="text-center">Bienvenido a nuestra tienda</h1>
    <p class="text-center">Explora nuestros productos disponibles</p>

    <div class="row">
        <?php
        $productos = [
            ["nombre" => "Producto 1", "precio" => 10],
            ["nombre" => "Producto 2", "precio" => 20],
            ["nombre" => "Producto 3", "precio" => 30],
        ];

        foreach ($productos as $producto) {
        ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>
                        <p class="card-text">$<?php echo $producto['precio']; ?></p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center p-3">
    <p>© <?php echo date("Y"); ?> Mi Tienda - Todos los derechos reservados</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
