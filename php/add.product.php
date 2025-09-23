<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conexion_kl.php';

$codigo = $_POST['codigo'] ?? '';
$nombre = $_POST['nombre'] ?? '';
$precio_venta = $_POST['precio_venta'] ?? 0;
$precio_compra = $_POST['precio_compra'] ?? 0;
$cantidad = $_POST['cantidad'] ?? 0;

if (empty($codigo) || empty($nombre)) {
    die("Código y Nombre son obligatorios.");
}

$codigo = $conexion->real_escape_string($codigo);
$nombre = $conexion->real_escape_string($nombre);
$precio_venta = floatval($precio_venta);
$precio_compra = floatval($precio_compra);
$cantidad = intval($cantidad);

$stmt = $conexion->prepare("INSERT INTO productos (codigo, nombre, precio_venta, precio_compra, cantidad) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssddi", $codigo, $nombre, $precio_venta, $precio_compra, $cantidad);

if ($stmt->execute()) {
    echo '
    <script>
        alert("Producto almacenado exitosamente");
        window.location = "../casillas/lista_de_producto.php";
    </script>
    ';
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
