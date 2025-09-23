
<?php
    include ("../layouts/header.nav.component/header.nav.component.php");
    include ("../php/list.user.service.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios | Andrea Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
        }
    </style>
</head>
<body class="bg-gray-100">
    
<main class="flex w-full mx-auto px-4 py-8 md:py-12 gap-4">
        
        <div class="w-full bg-white rounded-lg shadow-xl p-6 md:p-8 mb-8">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-6">Agregar/Editar Usuario</h3>
            
            <form action="../php/register.user.service.php" method="POST" class="space-y-6">

                <div>
                    <label for="nombre_usuario" class="block text-sm font-medium text-gray-700">Nombre Completo</label>
                    <input type="text" id="nombre_usuario" name="name" required
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label for="nombre_usuario" class="block text-sm font-medium text-gray-700">Nombre de Usuario</label>
                    <input type="text" id="nombre_usuario" name="user" required
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label for="correo_usuario" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                    <input type="email" id="correo_usuario" name="email" required
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                
                <div>
                    <label for="contrasena_usuario" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <input type="password" id="contrasena_usuario" name="password" required
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label for="rol_usuario" class="block text-sm font-medium text-gray-700">Rol</label>
                    <select id="rol_usuario" name="rol" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="" disabled selected>Selecciona un rol</option>
                        <option value="admin">Administrador</option>
                        <option value="secretario">Secretario</option>
                        <option value="user">Usuario</option>
                    </select>
                </div>

                <div class="flex gap-4">
                    <button type="submit" class="w-full sm:w-1/2 bg-indigo-600 text-white font-bold py-3 rounded-lg hover:bg-indigo-700 transition duration-300">
                        Guardar Usuario
                    </button>
                    <button type="reset" class="w-full sm:w-1/2 bg-gray-300 text-gray-700 font-bold py-3 rounded-lg hover:bg-gray-400 transition duration-300">
                        Limpiar
                    </button>
                </div>
            </form>
        </div>
        
        <div class="w-full bg-white rounded-lg shadow-xl p-6 md:p-8">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-6">Usuarios Existentes</h3>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Correo</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rol</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>

                            <?php
                            if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo $row['id']; ?></td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo $row['nombre_completo']; ?></td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $row['correo']; ?></td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo $row['rol']; ?></td>
        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">Editar</a>
            <a href="#" class="text-red-600 hover:text-red-900">Eliminar</a>
        </td>
</tr>
<?php
}
} else {
    echo "Error en la consulta: ";
}


                            ?>
                            
                        </tr>
                        </tbody>
                </table>
            </div>
        </div>
        
    </main>

</body>
</html>

