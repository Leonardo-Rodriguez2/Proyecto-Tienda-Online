/* // Manejo de pestañas
 const tabs = document.querySelectorAll('.tab');
 const contents = document.querySelectorAll('.tab-content');

 function setActiveTab(tabName) {
     tabs.forEach(t => t.classList.remove('active'));
     contents.forEach(c => c.classList.remove('active'));
     document.querySelector(`.tab[data-tab="${tabName}"]`).classList.add('active');
     document.getElementById(tabName).classList.add('active');
 }

 tabs.forEach(tab => {
     tab.addEventListener('click', () => setActiveTab(tab.dataset.tab));
 });

 // Variables globales para edición
 const form = document.getElementById('producto-form');
 const tableBody = document.querySelector('#tabla-productos tbody');
 const btnSubmit = document.getElementById('btn-submit');

 let editingRow = null;

 // Función para guardar en localStorage
 function guardarProductosEnLocalStorage(productos) {
     localStorage.setItem('productos', JSON.stringify(productos));
 }

 // Función para obtener productos de localStorage
 function obtenerProductosDeLocalStorage() {
     const data = localStorage.getItem('productos');
     return data ? JSON.parse(data) : [];
 }

 // Función para renderizar tabla desde array productos
 function renderizarTabla() {
     tableBody.innerHTML = ''; // limpiar tabla
     const productos = obtenerProductosDeLocalStorage();
     productos.forEach((producto) => {
         const row = document.createElement('tr');
         row.innerHTML = `
             <td>${producto.codigo}</td>
             <td>${producto.nombre}</td>
             <td>${producto.precioVenta}</td>
             <td>${producto.precioCompra}</td>
             <td>${producto.cantidad}</td>
             <td>
                 <div class="action-buttons">
                     <button class="btn btn-editar" type="button">Editar</button>
                     <button class="btn btn-eliminar" type="button">Eliminar</button>
                 </div>
             </td>
         `;
         tableBody.appendChild(row);
     });
 }

 // Inicializar tabla cuando carga la página
 window.addEventListener('load', () => {
     renderizarTabla();
 });

 // Añadir o editar producto
 form.addEventListener('submit', e => {
     e.preventDefault();

     const codigo = form.codigo.value.trim();
     const nombre = form.nombre.value.trim();
     const precioVenta = parseFloat(form.precioVenta.value).toFixed(2);
     const precioCompra = parseFloat(form.precioCompra.value).toFixed(2);
     const cantidad = parseInt(form.cantidad.value);

     let productos = obtenerProductosDeLocalStorage();

     if (editingRow) {
         // Editar producto existente en localStorage
         const index = Array.from(tableBody.children).indexOf(editingRow);
         productos[index] = { codigo, nombre, precioVenta, precioCompra, cantidad };

         editingRow = null;
         btnSubmit.textContent = 'Agregar Producto';
     } else {
         // Agregar nuevo producto
         productos.push({ codigo, nombre, precioVenta, precioCompra, cantidad });
     }

     // Guardar y actualizar tabla
     guardarProductosEnLocalStorage(productos);
     renderizarTabla();

     form.reset();
     form.codigo.focus();
     setActiveTab('lista');
 });

 // Manejo de botones editar/eliminar
 tableBody.addEventListener('click', e => {
     const target = e.target;

     if (target.classList.contains('btn-editar')) {
         editingRow = target.closest('tr');
         const index = Array.from(tableBody.children).indexOf(editingRow);

         const productos = obtenerProductosDeLocalStorage();
         const prod = productos[index];

         form.codigo.value = prod.codigo;
         form.nombre.value = prod.nombre;
         form.precioVenta.value = prod.precioVenta;
         form.precioCompra.value = prod.precioCompra;
         form.cantidad.value = prod.cantidad;

         btnSubmit.textContent = 'Guardar Cambios';
         setActiveTab('agregar');
         form.codigo.focus();

     } else if (target.classList.contains('btn-eliminar')) {
         if (confirm('¿Estás seguro que quieres eliminar este producto?')) {
             const row = target.closest('tr');
             const index = Array.from(tableBody.children).indexOf(row);

             let productos = obtenerProductosDeLocalStorage();
             productos.splice(index, 1);

             guardarProductosEnLocalStorage(productos);
             renderizarTabla();

             if (editingRow === row) {
                 editingRow = null;
                 form.reset();
                 btnSubmit.textContent = 'Agregar Producto';
                 setActiveTab('agregar');
             }
         }
     }
 });
 */
 document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    const tableBody = document.querySelector('#tabla-productos tbody');
    const tabs = document.querySelectorAll('.tab');
    const contents = document.querySelectorAll('.tab-content');
  
    function setActiveTab(tabName) {
      tabs.forEach(t => t.classList.remove('active'));
      contents.forEach(c => c.classList.remove('active'));
      document.querySelector(`.tab[data-tab="${tabName}"]`).classList.add('active');
      document.getElementById(tabName).classList.add('active');
    }
  
    async function cargarProductos() {
      const response = await fetch('../phpDB/listar_productos.php'); // Endpoint que devuelve productos en JSON
      const productos = await response.json();
  
      tableBody.innerHTML = '';
      productos.forEach(prod => {
        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${prod.codigo}</td>
          <td>${prod.nombre}</td>
          <td>${prod.precio_venta}</td>
          <td>${prod.precio_compra}</td>
          <td>${prod.cantidad}</td>
          <td>
            <div class="action-buttons">
              <button class="btn btn-editar" type="button" data-id="${prod.id}">Editar</button>
              <button class="btn btn-eliminar" type="button" data-id="${prod.id}">Eliminar</button>
            </div>
          </td>
        `;
        tableBody.appendChild(row);
      });
    }
  
    form.addEventListener('submit', async e => {
      e.preventDefault();
  
      const formData = new FormData(form);
  
      try {
        const res = await fetch('../phpDB/productobase.php', {
          method: 'POST',
          body: formData
        });
  
        const text = await res.text();
  
        alert('Producto agregado correctamente');
  
        form.reset();
        setActiveTab('lista');
        cargarProductos();
      } catch (error) {
        alert('Error al agregar el producto');
        console.error(error);
      }
    });
  
    // Cargar productos al inicio
    cargarProductos();
  
    // Manejo de pestañas
    tabs.forEach(tab => {
      tab.addEventListener('click', () => setActiveTab(tab.dataset.tab));
    });
  });
  