<?php

include "../php/conexion.php";

session_start();

$correo = $_SESSION["usuario"];

if ($correo) {  
    $resultado = mysqli_query($conexion, "SELECT rol FROM usuarios WHERE correo ='$correo'");
    $fila = mysqli_fetch_assoc($resultado);
    $rol = $fila ? $fila['rol'] : 'user';

    echo "<script>
        localStorage.setItem('rol', '$rol');
        window.location = '../pages/welcome.view.php';   
    </script>";
} else {
    echo "<script>
        localStorage.setItem('rol', 'user');
        alert('Verifique los datos');
    </script>";
}

