
<?php
    include ("../layouts/header.nav.component/header.nav.component.php");
?>

<section class="bg-gray-100">

    <main class="flex justify-between px-4 py-8 md:py-12">
        
        <div class="bg-white rounded-lg shadow-xl p-6 md:p-8 mb-8">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-6">Agregar/Editar Producto</h3>
            
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="id_producto" class="block text-sm font-medium text-gray-700">ID del Producto (Solo para editar)</label>
                    <input type="text" id="id_producto" name="id_producto" disabled
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm bg-gray-100 text-gray-500 cursor-not-allowed">
                </div>

                <div>
                    <label for="nombre_producto" class="block text-sm font-medium text-gray-700">Nombre del Producto</label>
                    <input type="text" id="nombre_producto" name="nombre_producto" required
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label for="descripcion_producto" class="block text-sm font-medium text-gray-700">Descripción</label>
                    <textarea id="descripcion_producto" name="descripcion_producto" rows="4" required
                              class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                </div>

                <div>
                    <label for="imagen_producto" class="block text-sm font-medium text-gray-700">URL de la Imagen</label>
                    <input type="url" id="imagen_producto" name="imagen_producto" required
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                
                <div>
                    <label for="precio_producto" class="block text-sm font-medium text-gray-700">Precio</label>
                    <input type="number" id="precio_producto" name="precio_producto" step="0.01" required
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="flex gap-4">
                    <button type="submit" class="w-full sm:w-1/2 bg-indigo-600 text-white font-bold py-3 rounded-lg hover:bg-indigo-700 transition duration-300">
                        Guardar Producto
                    </button>
                    <button type="reset" class="w-full sm:w-1/2 bg-gray-300 text-gray-700 font-bold py-3 rounded-lg hover:bg-gray-400 transition duration-300">
                        Limpiar
                    </button>
                </div>
            </form>
        </div>
        
        <div class="bg-white rounded-lg shadow-xl p-6 md:p-8">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-6">Productos Existentes</h3>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Imagen</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descripción</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Precio</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">101</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Camiseta Gráfica</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img class="h-12 w-12 rounded-full object-cover" src="https://images.unsplash.com/photo-1594732168923-a12b48651c6c?q=80&w=2670&auto=format&fit=crop" alt="Producto">
                            </td>
                            <td class="px-6 py-4 max-w-xs overflow-hidden text-sm text-gray-500">
                                Camiseta de algodón orgánico con diseño minimalista.
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">$30.00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">Editar</a>
                                <a href="#" class="text-red-600 hover:text-red-900">Eliminar</a>
                            </td>
                        </tr>
                        </tbody>
                </table>
            </div>
        </div>
        
    </main>

</section>