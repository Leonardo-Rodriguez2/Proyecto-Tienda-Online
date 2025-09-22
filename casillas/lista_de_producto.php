<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Gestión Elegante de Productos con Tabla Mejorada</title>
<link rel="stylesheet" href="../estilos/productos.css">
</head>
<body>

<div class="container">

    <div class="tabs">
        <div class="tab active" data-tab="agregar">Agregar Producto</div>
        <div class="tab" data-tab="lista">Lista de Productos</div>
    </div>

    <div id="agregar" class="tab-content active">
        <h2>Agregar Producto</h2>
        <form action="../phpDB/productobase.php" method="POST">
            <label for="codigo">Código de producto:</label>
            <input type="text" id="codigo" name="codigo" required />

            <label for="nombre">Nombre del producto:</label>
            <input type="text" id="nombre" name="nombre" required />

            <label for="precio_venta">Precio de venta ($):</label>
            <input type="number" id="precio_venta" name="precio_venta" step="0.01" min="0" required />

            <label for="precio_compra">Precio de compra ($):</label>
            <input type="number" id="precio_compra" name="precio_compra" step="0.01" min="0" required />

            <label for="cantidad">Cantidad del producto:</label>
            <input type="number" id="cantidad" name="cantidad" min="0" required />

            <button type="submit" id="btn-submit">Agregar Producto</button>
        </form>
    </div>

    <div id="lista" class="tab-content">
        <h2>Lista de Productos</h2>
        <table id="tabla-productos" aria-label="Lista de productos agregados">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Precio Venta ($)</th>
                    <th>Precio Compra ($)</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Productos agregados aparecerán aquí -->
            </tbody>
        </table>
    </div>
  
</div>

<a href="../bienvenido.php">
    <button>regresar al menu</button>

<script src="../js/produstos.js"></script>
</body>
</html>
