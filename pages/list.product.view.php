
    <?php
        include("../layouts/header.nav.component/header.nav.component.php");
    ?> 

<div class="flex flex-col md:flex-row gap-8 p-2">
            
            <aside class="w-full md:w-1/4 bg-white rounded-lg shadow-md p-6 h-fit sticky top-24">
                <h3 class="text-lg font-bold text-gray-800 mb-4">Filtros</h3>
                
                <div class="mb-6">
                    <label for="search-product" class="block text-sm font-medium text-gray-700 mb-2">Buscar Producto</label>
                    <input type="text" id="search-product" placeholder="Escribe para buscar..." class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div class="mb-6">
                    <h4 class="text-sm font-semibold text-gray-800 mb-2">Día de Entrega</h4>
                    <label class="flex items-center space-x-2 text-gray-700">
                        <input type="checkbox" class="form-checkbox text-indigo-600 rounded-sm">
                        <span>Recibelo Mañana</span>
                    </label>
                </div>

                <div class="mb-6">
                    <h4 class="text-sm font-semibold text-gray-800 mb-2">Género</h4>
                    <ul class="space-y-1">
                        <li>
                            <label class="flex items-center space-x-2 text-gray-700">
                                <input type="checkbox" class="form-checkbox text-indigo-600 rounded-sm">
                                <span>Mujer</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center space-x-2 text-gray-700">
                                <input type="checkbox" class="form-checkbox text-indigo-600 rounded-sm">
                                <span>Hombre</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center space-x-2 text-gray-700">
                                <input type="checkbox" class="form-checkbox text-indigo-600 rounded-sm">
                                <span>Niños</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center space-x-2 text-gray-700">
                                <input type="checkbox" class="form-checkbox text-indigo-600 rounded-sm">
                                <span>Niñas</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center space-x-2 text-gray-700">
                                <input type="checkbox" class="form-checkbox text-indigo-600 rounded-sm">
                                <span>Bebés</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center space-x-2 text-gray-700">
                                <input type="checkbox" class="form-checkbox text-indigo-600 rounded-sm">
                                <span>Unisex</span>
                            </label>
                        </li>
                    </ul>
                </div>
                
                <div class="mb-6">
                    <h4 class="text-sm font-semibold text-gray-800 mb-2">Opiniones de los clientes</h4>
                    <div class="flex items-center space-x-2 text-gray-700">
                        <span class="flex">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="far fa-star text-yellow-400"></i>
                        </span>
                        <span>4 & más</span>
                    </div>
                </div>

                <div>
                    <h4 class="text-sm font-semibold text-gray-800 mb-2">Departamento</h4>
                    <ul class="space-y-1">
                        <li><a href="#" class="text-gray-700 hover:text-indigo-600 text-sm">Ropa, Zapatos y Joyería</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-indigo-600 text-sm">Camisas, Camisetas y Blusas de Mujer</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-indigo-600 text-sm">Ropa Deportiva para Hombre</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-indigo-600 text-sm">Camisas para Hombre</a></li>
                    </ul>
                </div>
            </aside>
            

            <div class="w-full flex flex-col gap-8">
                
                <div class="grid grid-cols-3 gap-6 w-full flex-groud">
                
                <?php
                    foreach (range(1, 9) as $index) {
                        include("../components/card.for.clothes.component/card.for.clothes.component.php");
                    }
                ?>
                    
                </div>
                
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Carrito de Compra</h3>
                    <div class="text-center text-gray-500 py-8">
                        <p>Tu carrito está vacío</p>
                        <p>Añade productos a tu carrito para continuar</p>
                    </div>
                </div>
                
        </div>