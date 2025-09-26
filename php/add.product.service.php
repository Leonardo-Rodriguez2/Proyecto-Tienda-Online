<?php

include 'conexion.php';

$nombre = $_POST['name_product'] ?? '';
$precio = $_POST['price_product'] ?? 0;
$cantidad = $_POST['amount_product'] ?? 0;
$descripcion = $_POST['description_product'] ?? '';

$imgNameProduct = $_FILES['img_product']['name'] ?? '';
$imgProduct = $_FILES['img_product']['tmp_name'] ?? '';

$ruta = "../img/" . $imgNameProduct;
$imagenGuardada = false;
if (!empty($imgNameProduct) && !empty($imgProduct)) {
	$imagenGuardada = move_uploaded_file($imgProduct, $ruta);
}

$codigo = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 4);

if ($imagenGuardada || empty($imgNameProduct)) {
	$query = mysqli_query($conexion, "INSERT INTO productos (codigo, imagen, nombre, descripcion, precio, cantidad) VALUES ('$codigo', '$imgNameProduct', '$nombre', '$descripcion', '$precio', '$cantidad')");
	if ($query) {
        echo "
            <script> alert('La producto se almaceno exitosamente') 
            setTimeout(() => {
             window.location.href = '../index.php';
            }, 1000);
            </script>
            ";
	} else {
        header('location: ../index.php');
	}
} else {
	echo "Error al subir la imagen.";
}

?>
