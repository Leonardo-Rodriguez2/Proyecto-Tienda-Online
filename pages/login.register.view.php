
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andrea Store | Iniciar Sesión / Registrarse</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
        }
        .login-container, .register-container {
            display: none;
        }
        #toggle-form:checked ~ .login-container {
            display: none;
        }
        #toggle-form:checked ~ .register-container {
            display: block;
        }
        #toggle-form:not(:checked) ~ .login-container {
            display: block;
        }
        #toggle-form:not(:checked) ~ .register-container {
            display: none;
        }
    </style>
</head>

<section class="bg-gray-100 flex items-center min-h-screen">

    
    <div class="bg-white rounded-lg shadow-xl overflow-hidden mx-4 md:mx-auto p-8 flex">
        
        <div class="flex flex-col items-center mb-6">
            <h2 id="form-title-login" class="text-2xl font-bold text-gray-800 login-container">Iniciar Sesión</h2>
            <h2 id="form-title-register" class="text-2xl font-bold text-gray-800 register-container">Crear una cuenta</h2>
        </div>
        
        <input type="checkbox" id="toggle-form" class="hidden">

        <div class="login-container">
            <form action="../php/login.session.service.php" method="POST" class="space-y-4">
                <div>
                    <label for="login-email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                    <input type="email" id="login-email" name="email" required 
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label for="login-password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <input type="password" id="login-password" name="password" required 
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                
                <div class="flex items-center justify-between">
                    <a href="#" class="text-sm text-indigo-600 hover:underline">¿Olvidaste tu contraseña?</a>
                </div>
                
                <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-2 rounded-lg hover:bg-indigo-700 transition duration-300">
                    Iniciar Sesión
                </button>
            </form>
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    ¿No tienes una cuenta? 
                    <label for="toggle-form" class="text-indigo-600 font-medium hover:underline cursor-pointer">Regístrate</label>
                </p>
            </div>

            <div class="mt-6 text-center">
                <a href="./welcome.view.php" for="toggle-form" class="text-indigo-600 font-medium hover:underline cursor-pointer">Volver</a>
            </div>

        </div>

        <div class="register-container">
            <form action="../php/register.user.service.php" method="POST" class="space-y-4">
                <div>
                    <label for="register-name" class="block text-sm font-medium text-gray-700">Nombre Completo</label>
                    <input type="text" id="register-name" name="name" required 
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                 <div>
                    <label for="register-name" class="block text-sm font-medium text-gray-700">Nombre de Usuario</label>
                    <input type="text" id="register-name" name="user" required 
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label for="register-email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                    <input type="email" id="register-email" name="email" required 
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label for="register-password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <input type="password" id="register-password" name="password" required 
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                
                <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-2 rounded-lg hover:bg-indigo-700 transition duration-300">
                    Registrarse
                </button>
            </form>
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    ¿Ya tienes una cuenta? 
                    <label for="toggle-form" class="text-indigo-600 font-medium hover:underline cursor-pointer">Iniciar Sesión</label>
                </p>
            </div>

            <div class="mt-6 text-center">
                    <a href="welcome.view.php" for="toggle-form" class="text-indigo-600 font-medium hover:underline cursor-pointer">Volver</a>
            </div>

        </div>
    </div>
</section>