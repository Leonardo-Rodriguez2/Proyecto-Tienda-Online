<?php
// session_start();

//  if(!isset($_SESSION['usuario'])){
//      echo'
//         <script>
//             alert("por favor debes iniciar secion");
//         </script>
//      ';
//    header("location: index.php");
//    session_destroy(); 
//    die();
// }

?>

    <?php
        include_once('../layouts/header.nav.component/header.nav.component.php');
        include('../php/list.product.php');
    ?>

    <section class="relative bg-gray-900 text-white min-h-screen flex items-center justify-center text-center p-8">
        <div class="relative z-10 max-w-2xl mx-auto">
            <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight leading-tight mb-4">
                Elige tu estilo. Elige Andrea Store.
            </h1>
            <p class="text-lg sm:text-xl font-light mb-8">
                Descubre la nueva colección de ropa y accesorios que definen tu personalidad.
            </p>
            <a href="#productos" class="bg-white text-gray-900 px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-200 transition duration-300">
                Explorar Ahora
            </a>
        </div>
    </section>

    <section id="productos" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl sm:text-4xl font-bold text-center mb-12 text-gray-800">
                Nuestros Productos
            </h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            
                <?php
                include '../php/conexion.php';
                $result = mysqli_query($conexion, "SELECT * FROM productos LIMIT 8");
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">';
                        if (!empty($row['imagen'])) {
                            echo '<img src="../img/' . htmlspecialchars($row['imagen']) . '" class="w-full h-64 object-cover">';
                        } else {
                            echo '<div class="w-full h-64 flex items-center justify-center bg-gray-200 text-gray-400">Sin imagen</div>';
                        }
                        echo '<div class="p-6">';
                        echo '<h3 class="font-semibold text-lg text-gray-800 mb-2">' . htmlspecialchars($row['nombre']) . '</h3>';
                        echo '<div class="flex items-center justify-between mt-4">';
                        echo '<span class="text-xl font-bold text-indigo-600">$' . $row['precio'] . '</span>';
                        echo '<a href="#" class="bg-indigo-600 text-white px-4 py-2 rounded-full text-sm hover:bg-indigo-700 transition duration-300">Añadir al Carrito</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="col-span-4 text-center text-gray-500">No se pudieron cargar los productos.</div>';
                }
                ?>

            </div>
        </div>
    </section>


<section class="bg-gray-100 font-sans">
    
    <div class="container mx-auto p-4 md:p-8">
        <div class="flex flex-col md:flex-row bg-white rounded-lg shadow-xl overflow-hidden">
            
            <div class="w-full md:w-2/3 map-iframe-container">
                <img src="../img/google_maps.png" class="size-full h-full object-cover">
            </div>

            <div class="w-full md:w-1/3 p-6 md:p-8 flex flex-col justify-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Visítanos</h2>
                
                <div class="space-y-4 text-gray-600 text-lg">
                    <p>
                        <strong class="text-gray-900">ANDREA STORE</strong><br>
                        Calle 5, entre Carreras 3 y 4<br>
                        Socopó, Barinas, Venezuela
                    </p>
                    <p>
                        <i class="far fa-clock text-blue-500 mr-2"></i>
                        Horario: Lunes a Viernes: 9am – 5pm
                    </p>
                    <p>
                        <i class="far fa-envelope text-blue-500 mr-2"></i>
                        <a href="mailto:info@andrea-store.com" class="hover:text-blue-600">info@andrea-store.com</a>
                    </p>
                    <p>
                        <i class="fas fa-phone-alt text-blue-500 mr-2"></i>
                        <a href="tel:+580123456789" class="hover:text-blue-600">+58 012 345 6789</a>
                    </p>
                </div>

                <div class="flex space-x-4 mt-6 text-gray-600">
                    <a href="#" class="text-xl hover:text-blue-500 transition-colors"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-xl hover:text-blue-500 transition-colors"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-xl hover:text-blue-500 transition-colors"><i class="fab fa-tiktok"></i></a>
                </div>

                <div class="mt-8">
                    <a href="https://www.google.com/maps/dir/?api=1&destination=Andrea+Store,+Socopo,+Venezuela" 
                       target="_blank" 
                       class="inline-block bg-blue-500 text-white font-bold py-3 px-6 rounded-full hover:bg-blue-600 transition-colors">
                        Obtener Direcciones
                    </a>
                </div>
            </div>

        </div>
    </div>

</section>





<section class=" bg-white mx-auto px-4 py-8 md:py-12 lg:py-16">
        <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 lg:p-12 flex flex-col lg:flex-row gap-8 lg:gap-12">
            
            <div class="w-full lg:w-1/2 flex flex-col items-center">
                <div class="w-full max-w-lg mb-6">
                    <img id="main-product-image" src="../img/camisa.jpeg" 
                         alt="Camiseta Gráfica Moderna - Vista Principal" 
                         class="w-full h-auto object-cover">
    </div>
            </div>
            
            <div class="w-full lg:w-1/2 flex flex-col justify-between">
                <div>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 leading-tight">Camiseta Gráfica Moderna</h1>
                    <p class="text-4xl md:text-5xl font-bold text-indigo-600 mb-6">$30.00</p>
                    
                    <p class="text-gray-700 text-lg leading-relaxed mb-8">
                        Confeccionada con 100% algodón orgánico de primera calidad, esta camiseta ofrece una suavidad inigualable y una transpirabilidad óptima para tu comodidad diaria. Su diseño gráfico minimalista es la elección perfecta para quienes buscan un estilo casual pero a la vanguardia de la moda.
                    </p>
                    
                    <div class="mb-8">
                        <span class="font-bold text-gray-800 text-lg block mb-3">Talla:</span>
                        <div class="flex flex-wrap gap-3">
                            <button class="size-option bg-gray-200 text-gray-800 px-6 py-3 rounded-full font-semibold hover:bg-gray-300 transition-colors duration-200">S</button>
                            <button class="size-option bg-gray-200 text-gray-800 px-6 py-3 rounded-full font-semibold hover:bg-gray-300 transition-colors duration-200 selected">M</button>
                            <button class="size-option bg-gray-200 text-gray-800 px-6 py-3 rounded-full font-semibold hover:bg-gray-300 transition-colors duration-200">L</button>
                            <button class="size-option bg-gray-200 text-gray-800 px-6 py-3 rounded-full font-semibold hover:bg-gray-300 transition-colors duration-200">XL</button>
                        </div>
                    </div>

                    <div class="mb-8">
                        <span class="font-bold text-gray-800 text-lg block mb-3">Color:</span>
                        <div class="flex flex-wrap gap-3">
                            <div class="color-option h-10 w-10 rounded-full bg-black border-2 border-transparent hover:border-indigo-500 transition-colors duration-200 cursor-pointer" title="Negro"></div>
                            <div class="color-option h-10 w-10 rounded-full bg-white border-2 border-indigo-500 transition-colors duration-200 cursor-pointer selected" title="Blanco"></div>
                            <div class="color-option h-10 w-10 rounded-full bg-green-600 border-2 border-transparent hover:border-indigo-500 transition-colors duration-200 cursor-pointer" title="Verde"></div>
                            <div class="color-option h-10 w-10 rounded-full bg-red-600 border-2 border-transparent hover:border-indigo-500 transition-colors duration-200 cursor-pointer" title="Rojo"></div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <button class="w-full sm:w-1/2 bg-indigo-600 text-white font-bold py-4 rounded-lg hover:bg-indigo-700 transition-colors duration-300 text-lg">
                        <i class="fas fa-shopping-cart mr-2"></i> Añadir al Carrito
                    </button>
                    <button class="w-full sm:w-1/2 bg-transparent border-2 border-indigo-600 text-indigo-600 font-bold py-4 rounded-lg hover:bg-indigo-600 hover:text-white transition-colors duration-300 text-lg">
                        Comprar Ahora
                    </button>
                </div>
            </div>
            
        </div>
    </section>




    <footer id="contacto" class="bg-gray-900 text-gray-300 py-12">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <img src="img/andrea_store_blanco.png" alt="Logo de Andrea Store" class="h-10 mb-4">
                <p class="text-sm">
                    Andrea Store es una marca de moda que combina diseño, calidad y estilo para un look auténtico.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-bold text-white mb-4">Enlaces</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition-colors duration-300">Inicio</a></li>
                    <li><a href="#productos" class="hover:text-white transition-colors duration-300">Tienda</a></li>
                    <li><a href="#nosotros" class="hover:text-white transition-colors duration-300">Sobre Nosotros</a></li>
                    <li><a href="#contacto" class="hover:text-white transition-colors duration-300">Contáctanos</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-bold text-white mb-4">Soporte</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition-colors duration-300">FAQ</a></li>
                    <li><a href="#" class="hover:text-white transition-colors duration-300">Política de Envíos</a></li>
                    <li><a href="#" class="hover:text-white transition-colors duration-300">Devoluciones</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-bold text-white mb-4">Síguenos</h3>
                <div class="flex space-x-4 mb-4">
                    <a href="#" class="hover:text-white transition-colors duration-300"><img src="icons/facebook.svg" alt="Facebook" class="h-6 w-6"></a>
                    <a href="#" class="hover:text-white transition-colors duration-300"><img src="icons/instagram.svg" alt="Instagram" class="h-6 w-6"></a>
                    <a href="#" class="hover:text-white transition-colors duration-300"><img src="icons/twitter.svg" alt="Twitter" class="h-6 w-6"></a>
                </div>
                <h4 class="text-white text-sm font-semibold mb-2">Suscríbete</h4>
                <div class="flex">
                    <input type="email" placeholder="Tu email" class="px-4 py-2 w-full text-gray-800 rounded-l-full focus:outline-none">
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-r-full hover:bg-indigo-700 transition duration-300">
                        OK
                    </button>
                </div>
            </div>
        </div>
        <div class="text-center text-xs text-gray-500 mt-8">
            &copy; 2023 Andrea Store. Todos los derechos reservados.
        </div>
    </footer>



</section>
</html>