<?php


session_start();

$correo = $_SESSION["usuario"];

if ($correo === "leonardorodriguez172021@gmail.com") {  
    $_SESSION['verifi'] = true;
    echo '<script>
    window.location = "../pages/bienvenida.view.php";   
    </script> 
      ';
}else{
    $_SESSION['verifi'] = false;
}

?>