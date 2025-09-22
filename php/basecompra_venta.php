<?php
include 'conexion.php';

// Validar que los datos del formulario se reciban
if(isset($_POST['cedula'], $_POST['nombrecomprador'], $_POST['telefono'], $_POST['fecha'], $_POST['producto'], $_POST['precio'], $_POST['cantidad'])) {

    $cedula = $_POST['cedula'];
    $nombrecomprador = $_POST['nombrecomprador'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    // Preparar la sentencia
    $stmt = $conexion->prepare("INSERT INTO compraventa (cedula, nombrecomprador, telefono, fecha, producto, precio, cantidad) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssdii", $cedula, $nombrecomprador, $telefono, $fecha, $producto, $precio, $cantidad);

    if ($stmt->execute()) {
        echo '<script>
                alert("Producto almacenado exitosamente");
                window.location = "../casillas/lista_de_compras_y_ventas.php";
              </script>';
    } else {
        echo '<script>
                alert("Error al almacenar el producto. Intente de nuevo.");
                window.location = "../casillas/lista_de_compras_y_ventas.php";
              </script>';
    }

    $stmt->close();
} else {
    echo '<script>
            alert("Por favor complete todos los campos del formulario.");
            window.location = "../casillas/lista_de_compras_y_ventas.php";
          </script>';
}

$conexion->close();
?>
