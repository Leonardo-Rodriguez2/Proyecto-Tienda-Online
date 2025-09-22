<?php

session_start();

include 'conexion.php';

$correo = $_POST['email'];
$contrasena = $_POST['password'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo'
and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo;
    header("location: ../php/verifi.session.service.php");
    exit();
}else{
    echo'
      <script>
        alert("usuario no existe, por favor verifique los datos introducidos");
        window.location = "../pages/login.register.view.php";   
      </script>   
    ';
    exit();
}

?>