
<style>
            /* Estilo para la foto de perfil */
        .profile-pic {
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
</style>

<?php
    include("../layouts/header.nav.component/header.nav.component.php");
?>

<div class="bg-gray-100">


    <main class="container mx-auto px-4 py-8 md:py-12">
        <div class="flex flex-col md:flex-row gap-6">

            <aside class="w-full md:w-1/4">
                <div class="bg-white rounded-lg shadow-xl p-6 mb-6 text-center">
                    
                    <img src="https://i.pravatar.cc/120?img=1" alt="Foto de perfil" 
                         class="profile-pic rounded-full mx-auto border-4 border-indigo-500 mb-4">
                    
                    <h4 class="text-lg font-bold text-gray-800">Nombre de Usuario</h4>
                    <p class="text-sm text-gray-500">Rol: Administrador</p>
                    
                    <button class="mt-4 text-xs text-indigo-600 hover:text-indigo-800 font-medium">
                        Cambiar Foto
                    </button>
                </div>

                <nav class="bg-white rounded-lg shadow-xl p-4 space-y-2">
                    <a href="#detalles" class="flex items-center p-3 text-indigo-600 font-semibold bg-indigo-50 rounded-md hover:bg-indigo-100 transition duration-150">
                        <i class="fas fa-user mr-3"></i> Detalles de la Cuenta
                    </a>
                    <a href="#pedidos" class="flex items-center p-3 text-gray-700 font-medium rounded-md hover:bg-gray-100 transition duration-150">
                        <i class="fas fa-history mr-3"></i> Historial de Pedidos
                    </a>
                    <a href="#seguridad" class="flex items-center p-3 text-gray-700 font-medium rounded-md hover:bg-gray-100 transition duration-150">
                        <i class="fas fa-lock mr-3"></i> Seguridad y Contraseña
                    </a>
                </nav>
            </aside>

            <div class="w-full md:w-3/4 space-y-8">
                
                <section id="detalles" class="bg-white rounded-lg shadow-xl p-6 md:p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">Información Personal</h3>
                    
                    <form action="#" method="POST" class="space-y-6">
                        <div>
                            <label for="nombre_completo" class="block text-sm font-medium text-gray-700">Nombre Completo</label>
                            <input type="text" id="nombre_completo" name="nombre_completo" value="Andrea López"
                                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>

                        <div>
                            <label for="correo" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                            <input type="email" id="correo" name="correo" value="andrea.lopez@store.com"
                                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4">
                            <div class="w-full sm:w-1/2">
                                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                                <input type="text" id="telefono" name="telefono" value="+58 412 123 4567"
                                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="w-full sm:w-1/2">
                                <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
                                <input type="text" id="direccion" name="direccion" value="Calle Principal, Barinas"
                                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="bg-indigo-600 text-white font-bold py-2 px-6 rounded-lg hover:bg-indigo-700 transition duration-300">
                                Guardar Cambios
                            </button>
                        </div>
                    </form>
                </section>

                <section id="seguridad" class="bg-white rounded-lg shadow-xl p-6 md:p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">Cambiar Contraseña</h3>
                    
                    <form action="#" method="POST" class="space-y-6 max-w-lg">
                        
                        <div>
                            <label for="pass_actual" class="block text-sm font-medium text-gray-700">Contraseña Actual</label>
                            <input type="password" id="pass_actual" name="pass_actual" required
                                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>

                        <div>
                            <label for="pass_nueva" class="block text-sm font-medium text-gray-700">Nueva Contraseña</label>
                            <input type="password" id="pass_nueva" name="pass_nueva" required
                                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        
                        <div>
                            <label for="pass_confirmar" class="block text-sm font-medium text-gray-700">Confirmar Nueva Contraseña</label>
                            <input type="password" id="pass_confirmar" name="pass_confirmar" required
                                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="bg-red-600 text-white font-bold py-2 px-6 rounded-lg hover:bg-red-700 transition duration-300">
                                Actualizar Contraseña
                            </button>
                        </div>
                    </form>
                </section>

                <section id="pedidos" class="bg-white rounded-lg shadow-xl p-6 md:p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">Historial de Pedidos</h3>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID Pedido</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Detalle</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">#00125</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-09-15</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$150.99</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Entregado
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-indigo-600 hover:text-indigo-900 cursor-pointer">
                                        Ver
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">#00126</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-09-22</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$85.00</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            En Proceso
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-indigo-600 hover:text-indigo-900 cursor-pointer">
                                        Ver
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

            </div>
        </div>
    </main>
</div>
</html>