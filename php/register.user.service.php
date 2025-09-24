<?php

include 'conexion.php';

$nombre_completo = $_POST['name'];
$correo = $_POST['email'];
$usuario = $_POST['user'];
$contrasena = $_POST['password'];

if(isset($_POST['rol'])){
  $rol = $_POST['rol'];
}else{
  $rol = 'cliente';
}


/* encriptamiento de contraseña
$contrasena = hash('sha512', $contrasena);
*/

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena, rol)
           VALUES ('$nombre_completo' , '$correo' , '$usuario' , '$contrasena', '$rol')";
 
  //vereificar que el correo no se repita
  $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");

  if(mysqli_num_rows($verificar_correo) > 0){
    echo '
          <script>
            alert("este correo ya esta registrado, intente con otro");
            window.location = "../pages/login.register.view.php";   
          </script>  
    ';
    exit();
  }

 //vereificar que el nombre de usuario no se repita
 $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");

 if(mysqli_num_rows($verificar_usuario) > 0){
   echo '
         <script>
           alert("este usuario ya esta registrado, intente con otro");
           window.location = "../pages/login.register.view.php";   
         </script>   
   ';
   exit();
 }

$ejecutar = mysqli_query($conexion , $query);           

if($ejecutar){
  echo '
        <script>
               alert("usuario almacenado exitosamente");
               window.location = "../pages/login.register.view.php";      
        </script>
  ';
 }else{
  echo '
        <script>
               alert("intentelo de nuevo, usuario no almacenado");
            window.location = "../pages/login.register.view.php";   
        </script>   
  ';
 }

 mysqli_close($conexion);
?> 