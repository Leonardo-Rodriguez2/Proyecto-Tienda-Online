
<style>
            .order-status {
            font-size: 0.8rem;
            padding: 0.2rem 0.6rem;
        }
</style>

<?php
    include("../layouts/header.nav.component/header.nav.component.php");
?>

<div class="bg-gray-100">

    <main class="container mx-auto px-4 py-8 md:py-12">
        <div class="max-w-4xl mx-auto space-y-6">

            <div class="flex flex-col sm:flex-row justify-between items-center bg-white rounded-lg shadow p-4 border-l-4 border-indigo-500">
                <p class="text-gray-700 font-medium">Tienes <span class="text-indigo-600 font-bold">4 pedidos</span> realizados en los últimos 6 meses.</p>
                <button class="mt-3 sm:mt-0 text-indigo-600 hover:text-indigo-800 font-medium text-sm flex items-center">
                    <i class="fas fa-filter mr-1"></i> Filtrar por Estado
                </button>
            </div>


            <div class="bg-white rounded-lg shadow-xl hover:shadow-2xl transition duration-300 overflow-hidden border-t-4 border-green-500">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <span class="text-lg font-bold text-gray-800">Pedido #00128</span>
                            <p class="text-sm text-gray-500">Realizado el: 26 Septiembre, 2025</p>
                        </div>
                        <span class="order-status font-bold rounded-full bg-green-100 text-green-800">
                            <i class="fas fa-check-circle mr-1"></i> ENTREGADO
                        </span>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 border-t pt-4">
                        <div>
                            <p class="text-xs text-gray-500 uppercase">Total</p>
                            <p class="text-lg font-bold text-indigo-600">$185.00</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase">Método</p>
                            <p class="text-sm font-medium text-gray-700">Tarjeta de Crédito</p>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <p class="text-xs text-gray-500 uppercase">Artículos</p>
                            <p class="text-sm font-medium text-gray-700">3 productos</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 px-6 py-4 flex flex-col sm:flex-row justify-between items-center gap-3">
                    <a href="#" class="text-indigo-600 hover:text-indigo-800 font-semibold text-sm">
                        <i class="fas fa-receipt mr-1"></i> Ver Factura
                    </a>
                    <a href="#" class="bg-indigo-600 text-white text-sm font-semibold py-2 px-4 rounded-lg hover:bg-indigo-700 transition duration-300">
                        Ver Detalles del Pedido
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-xl hover:shadow-2xl transition duration-300 overflow-hidden border-t-4 border-yellow-500">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <span class="text-lg font-bold text-gray-800">Pedido #00129</span>
                            <p class="text-sm text-gray-500">Realizado el: 18 Septiembre, 2025</p>
                        </div>
                        <span class="order-status font-bold rounded-full bg-yellow-100 text-yellow-800">
                            <i class="fas fa-truck mr-1"></i> EN PROCESO
                        </span>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 border-t pt-4">
                        <div>
                            <p class="text-xs text-gray-500 uppercase">Total</p>
                            <p class="text-lg font-bold text-indigo-600">$55.99</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase">Método</p>
                            <p class="text-sm font-medium text-gray-700">Transferencia</p>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <p class="text-xs text-gray-500 uppercase">Artículos</p>
                            <p class="text-sm font-medium text-gray-700">1 producto</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 px-6 py-4 flex flex-col sm:flex-row justify-between items-center gap-3">
                    <a href="#" class="text-indigo-600 hover:text-indigo-800 font-semibold text-sm">
                        <i class="fas fa-map-marker-alt mr-1"></i> Seguimiento
                    </a>
                    <a href="#" class="bg-indigo-600 text-white text-sm font-semibold py-2 px-4 rounded-lg hover:bg-indigo-700 transition duration-300">
                        Ver Detalles del Pedido
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-xl hover:shadow-2xl transition duration-300 overflow-hidden border-t-4 border-red-500">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <span class="text-lg font-bold text-gray-800">Pedido #00130</span>
                            <p class="text-sm text-gray-500">Realizado el: 10 Septiembre, 2025</p>
                        </div>
                        <span class="order-status font-bold rounded-full bg-red-100 text-red-800">
                            <i class="fas fa-times-circle mr-1"></i> CANCELADO
                        </span>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 border-t pt-4">
                        <div>
                            <p class="text-xs text-gray-500 uppercase">Total</p>
                            <p class="text-lg font-bold text-indigo-600">$29.50</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase">Método</p>
                            <p class="text-sm font-medium text-gray-700">PayPal</p>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <p class="text-xs text-gray-500 uppercase">Artículos</p>
                            <p class="text-sm font-medium text-gray-700">2 productos</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-gray-100 px-6 py-4 flex justify-end">
                    <p class="text-sm text-red-500 font-medium">Contacta a soporte para más información.</p>
                </div>
            </div>

        </div>
    </main>

</div>
</html>