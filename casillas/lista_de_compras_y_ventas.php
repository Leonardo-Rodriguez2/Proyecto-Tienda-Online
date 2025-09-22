<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Ventas y Compras</title>
    <link rel="stylesheet" href="../estilos/stylepro.css">
<body>
    <div class="container">
        <div class="tabs">
            <button class="tab active" onclick="showTab(0)">Agregar Compra/Venta</button>
            <button class="tab" onclick="showTab(1)">Registro de Compras/Ventas</button>
        </div>
        <div class="tab-content active" id="formTab">
            <form id="transactionForm">
                <div>
                <form action="../phpDB/basecompra_venta.php" method="POST">
                    <label for="cedula">Cédula:</label>
                    <input type="text" id="cedula" name="cedula" required>
                </div>
                <div>
                    <label for="nombreComprador">Nombre del comprador:</label>
                    <input type="text" id="nombreComprador" name="nombreComprador" required>
                </div>
                <div>
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" pattern="[0-9\s+()-]{7,15}" title="Solo números y caracteres de teléfono válidos" required>
                </div>
                <div>
                    <label for="fecha">Fecha de la compra:</label>
                    <input type="date" id="fecha" name="fecha" required>
                </div>
                <div>
                    <label for="producto">Nombre del producto:</label>
                    <input type="text" id="producto" name="producto" required>
                </div>
                <div>
                    <label for="precio">Precio de la venta del producto:</label>
                    <input type="number" id="precio" name="precio" step="0.01" min="0" required>
                </div>
                <div>
                    <label for="cantidad">Cantidad de producto:</label>
                    <input type="number" id="cantidad" name="cantidad" min="1" required>
                </div>
                <button type="submit">Agregar</button>
            </form>
        </div>
        <div class="tab-content" id="tableTab">
            <table id="transactionTable">
                <thead>
                    <tr>
                        <th>Cédula</th>
                        <th>Nombre del comprador</th>
                        <th>Teléfono</th>
                        <th>Fecha de la compra</th>
                        <th>Nombre del producto</th>
                        <th>Precio de la venta del producto</th>
                        <th>Cantidad de producto</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Filas dinámicas -->
                </tbody>
            </table>
        </div>
    </div>
    <script src="../js/jscompra_venta.js"></script>
    
    <a href="../bienvenido.php">
    <button>regresar al menu</button>
</body>
</html>
 