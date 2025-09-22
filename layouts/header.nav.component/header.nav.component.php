<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andrea Store | Ropa y Accesorios de Moda</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../img/andrea_store.jpeg" type="image/x-icon">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

<?php
    $verifi = $_SESSION["verifi"];
    echo $verifi;
    echo "hola mundo";
?>

    <header class="bg-gray-400 shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-3 flex items-center justify-between">
        </div>
    </header>

    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <a href="index.php">
                    <img src="../img/andrea_store.jpeg" alt="Logo de Andrea Store" class="h-12 w-auto">
                </a>
                <h2 class="text-2xl text-gray-500">Andrea Store <?php echo $rute;?> </h2>
            </div>
            
            <nav class="hidden md:flex items-center space-x-8">
                <a href="../pages/bienvenida.view.php" class="text-gray-700 hover:text-indigo-600 font-semibold">Inicio</a>
                <a href="../pages/list.product.view.php" class="text-gray-700 hover:text-indigo-600 font-medium">Productos</a>
                <a href="#nosotros" class="text-gray-700 hover:text-indigo-600 font-medium">Nosotros</a>
                <a href="#contacto" class="text-gray-700 hover:text-indigo-600 font-medium">Contacto</a>
            </nav>

            <div class="flex items-center space-x-4">
                <a href="../pages/login.register.view.php" class="text-gray-700 hover:text-indigo-600 font-medium hidden sm:block">
                    Iniciar sesión
                </a>
                <a href="../pages/login.register.view.php" class="bg-indigo-600 text-white px-5 py-2 rounded-full hover:bg-indigo-700 transition duration-300">
                    Registrarse
                </a>
            </div>
        </div>
    </header>