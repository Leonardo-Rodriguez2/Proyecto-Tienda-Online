<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andrea Store | Ropa y Accesorios de Moda</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="../../img/andrea_store.jpeg" type="image/x-icon">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
        }

        /* Estilo para el menú desplegable de usuario */
        .user-dropdown {
            position: relative;
        }
        .user-dropdown-menu {
            display: none;
        }
        .user-dropdown:hover .user-dropdown-menu {
            display: block;
        }
    </style>
</head>
<body>

    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <a href="index.php">
                    <img src="../img/andrea_store.jpeg" alt="Logo de Andrea Store" class="h-12 w-auto">
                </a>
                <h2 class="text-2xl text-gray-500">Andrea Store</h2>
            </div>
            
            <nav id="main-nav" class="hidden md:flex items-center space-x-8"></nav>

            <div id="auth-buttons" class="flex items-center space-x-4"></div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Se asume que el 'name' y el 'rol' están en localStorage al iniciar sesión
            const userRole = localStorage.getItem('rol');
            const userName = localStorage.getItem('name');
            const nav = document.getElementById('main-nav');
            const authButtons = document.getElementById('auth-buttons');

            const links = {
                cliente: [
                    { text: 'Inicio', href: '../../Proyecto-Kleibel/pages/welcome.view.php' },
                    { text: 'Productos', href: '../../Proyecto-Kleibel/pages/list.product.view.php' },
                    { text: 'Compras', href: '#nosotros' },
                    { text: 'Perfil', href: '#nosotros' },
                ],
                admin: [
                    { text: 'Inicio', href: '../../Proyecto-Kleibel/pages/welcome.view.php' },
                    { text: 'Productos', href: '../../Proyecto-Kleibel/pages/list.product.view.php' },
                    { text: 'Gestión de Productos', href: '../../Proyecto-Kleibel/pages/product.management.view.php' },
                    { text: 'Gestión de Facturas', href: 'gestion-facturas.php' },
                    { text: 'Gestión de Usuarios', href: '../../Proyecto-Kleibel/pages/user.management.view.php' }
                ],
                secretario: [
                    { text: 'Inicio', href: '../../Proyecto-Kleibel/pages/welcome.view.php' },
                    { text: 'Productos', href: '../../Proyecto-Kleibel/pages/list.product.view.php' },
                    { text: 'Gestión de Productos', href: '../../Proyecto-Kleibel/pages/product.management.view.php' },
                    { text: 'Gestión de Facturas', href: 'gestion-facturas.php' }
                ],
                default: [
                    { text: 'Inicio', href: '../../Proyecto-Kleibel/pages/welcome.view.php' },
                    { text: 'Productos', href: '../../Proyecto-Kleibel/pages/list.product.view.php' },
                    { text: 'Nosotros', href: '#nosotros' },
                ]
            };

            const generateNavLinks = (roleLinks) => {
                nav.innerHTML = '';
                roleLinks.forEach(link => {
                    const a = document.createElement('a');
                    a.href = link.href;
                    a.textContent = link.text;
                    a.className = 'text-gray-700 hover:text-indigo-600 font-medium';
                    nav.appendChild(a);
                });
            };

            const generateAuthButtons = (role, name) => {
                authButtons.innerHTML = '';
                if (role) {
                    // Si hay un rol definido, muestra el menú de usuario
                    const dropdown = document.createElement('div');
                    dropdown.className = 'user-dropdown relative';
                    dropdown.innerHTML = `
                        <label for="menu" class="flex items-center space-x-2 text-gray-700 hover:text-indigo-600 font-medium cursor-pointer">
                            <i class="fas fa-user-circle text-2xl"></i>
                            <span>${name || 'Usuario'}</span>
                        </label>
                        <div id="menu" class="user-dropdown-menu absolute bg-white shadow-lg rounded-md mt-2 w-48 py-2 right-0 z-50">
                            ${role === 'admin' || role === 'secretario' ? '<a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Perfil</a>' : ''}
                            <a href="../php/cerra_session.service.php" id="logout-btn" class="block px-4 py-2 text-red-500 hover:bg-gray-100">Cerrar Sesión</a>
                        </div>
                    `;
                    authButtons.appendChild(dropdown);

                    document.getElementById('logout-btn').addEventListener('click', (e) => {
                        e.preventDefault();
                        localStorage.removeItem('rol');
                        localStorage.removeItem('name');
                        window.location.reload();
                    });
                } else {
                    // Si no hay un rol, muestra los botones de login y registro
                    authButtons.innerHTML = `
                        <a href="../pages/login.register.view.php" class="text-gray-700 hover:text-indigo-600 font-medium hidden sm:block">
                            Iniciar sesión
                        </a>
                        <a href="../pages/login.register.view.php" class="bg-indigo-600 text-white px-5 py-2 rounded-full hover:bg-indigo-700 transition duration-300">
                            Registrarse
                        </a>
                    `;
                }
            };

            // Lógica principal
            switch (userRole) {
                case 'user':
                    generateNavLinks(links.user);
                    generateAuthButtons('user', userName);
                    break;
                case 'admin':
                    generateNavLinks(links.admin);
                    generateAuthButtons('admin', userName);
                    break;
                case 'secretario':
                    generateNavLinks(links.secretario);
                    generateAuthButtons('secretario', userName);
                    break;
                default:
                    generateNavLinks(links.default);
                    generateAuthButtons(null);
                    break;
            }
        });
    </script>
</body>
</html>