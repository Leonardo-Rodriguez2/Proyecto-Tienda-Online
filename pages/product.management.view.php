
<?php
    include ("../layouts/header.nav.component/header.nav.component.php");
    include ("../php/list.product.php");
?>

<section class="bg-gray-100">

    <main class="flex px-4 py-8 md:py-12 gap-3">
        
        <div class="w-full bg-white max-w-xl rounded-lg shadow-xl p-6 md:p-8 mb-8">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-6">Agregar/Producto</h3>
            
<form action="../php/add.product.service.php" method="POST" enctype="multipart/form-data" class="space-y-6">
                <div>
                    <label for="nombre_producto" class="block text-sm font-medium text-gray-700">Nombre del Producto</label>
                    <input type="text" id="nombre_producto" name="name_product" required
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

<div class="flex items-center justify-center w-full">
        <input type="file" name="img_product" />
</div> 

                
                <div class="flex gap-2">
                    <label for="precio_producto" class="block text-sm font-medium text-gray-700">Precio

                     <input type="number" id="precio_producto" name="price_product" step="0.01" required
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">

                    </label> 
                                               <label for="precio_producto" class="block text-sm font-medium text-gray-700">Cantidad


                                                                   <input type="number" id="amount_product" name="amount_product" step="0.01" required
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">

                                               </label>
                </div>


                 <div>
                    <label for="descripcion_producto" class="block text-sm font-medium text-gray-700">Descripción</label>
                    <textarea id="descripcion_producto" name="description_product" rows="4" required
                              class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
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
        
        <div class="w-full bg-white rounded-lg shadow-xl p-6 md:p-8">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-6">Productos Existentes</h3>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">codigo</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Imagen</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Precio</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                        <?php
                        include '../php/conexion.php';
                        $result = mysqli_query($conexion, "SELECT * FROM productos");
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">' . $row['id'] . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">' . htmlspecialchars($row['nombre']) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">' . htmlspecialchars($row['codigo']) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">';
                                if (!empty($row['imagen'])) {
                                    echo '<img class="h-12 w-12 rounded-[6px] object-cover" src="../img/' . htmlspecialchars($row['imagen']) . '" alt="Producto">';
                                } else {
                                    echo '<span class="text-gray-400">Sin imagen</span>';
                                }
                                echo '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">$' . $row['precio'] . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">';
                                echo '<a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">Editar</a>';
                                echo '<a href="#" class="text-red-600 hover:text-red-900">Eliminar</a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="5">Error en la consulta: ' . mysqli_error($conexion) . '</td></tr>';
                        }
                        ?>
                        </tbody>
                </table>
            </div>
        </div>
        
    </main>

</section>