<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'productos.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tienda Online</h1>
    <div class="productos">
        <?php foreach ($productos as $producto): ?>
            <div class="producto">
                <img src="<?= $producto['imagen'] ?>" alt="<?= $producto['nombre'] ?>">
                <h2><?= $producto['nombre'] ?></h2>
                <p><?= $producto['descripcion'] ?></p>
                <p>$<?= number_format($producto['precio'], 2) ?></p>
                <button onclick="agregarCarrito(<?= $producto['id'] ?>)">Agregar al carrito</button>
            </div>
        <?php endforeach; ?>
    </div>
    <div id="carrito">
        <h2>Carrito de Compras</h2>
        <ul id="lista-carrito"></ul>
    </div>
    <script src="script.js"></script>
</body>
</html>
