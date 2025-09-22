<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registro de Ventas del Día</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f7f9fc;
      padding: 20px;
      display: flex;
      justify-content: center;
    }

    .container {
      width: 90%;
      max-width: 900px;
      background-color: #fff;
      padding: 20px 30px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      border-radius: 8px;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 24px;
    }

    form {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 15px 20px;
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: 600;
      margin-bottom: 6px;
      color: #555;
    }

    input[type="text"],
    input[type="tel"],
    input[type="date"],
    input[type="number"] {
      width: 100%;
      padding: 8px 12px;
      border: 1.5px solid #ccc;
      border-radius: 5px;
      font-size: 0.9rem;
      transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="tel"]:focus,
    input[type="date"]:focus,
    input[type="number"]:focus {
      border-color: #007bff;
      outline: none;
    }

    button {
      grid-column: 1 / -1;
      padding: 12px;
      font-size: 1rem;
      background-color: #007bff;
      border: none;
      color: white;
      font-weight: 600;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.25s ease;
    }

    button:hover {
      background-color: #0056b3;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 10px 15px;
      text-align: left;
      font-size: 0.95rem;
    }

    th {
      background-color: #007bff;
      color: white;
      font-weight: 600;
    }

    tbody tr:nth-child(even) {
      background-color: #f1f3f5;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Registro diario de ventas</h1>
    <form id="salesForm">
      <div>
        <label for="cedula">Cédula</label>
        <input type="text" id="cedula" name="cedula" placeholder="Ej. 1234567890" required pattern="\d+" />
      </div>
      <div>
        <label for="nombre">Nombre del comprador</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required />
      </div>
      <div>
        <label for="telefono">Teléfono</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Ej. 3001234567" required pattern="\d+" />
      </div>
      <div>
        <label for="fecha">Fecha de compra</label>
        <input type="date" id="fecha" name="fecha" required />
      </div>
      <div>
        <label for="producto">Nombre del producto</label>
        <input type="text" id="producto" name="producto" placeholder="Ej. Manzanas" required />
      </div>
      <div>
        <label for="precio">Precio del producto</label>
        <input type="number" id="precio" name="precio" min="0" step="0.01" placeholder="0.00" required />
      </div>
      <div>
        <label for="cantidad">Cantidad del producto</label>
        <input type="number" id="cantidad" name="cantidad" min="1" step="1" placeholder="1" required />
      </div>
      <button type="submit">Agregar venta</button>
    </form>

    <table id="salesTable">
      <thead>
        <tr>
          <th>Cédula</th>
          <th>Nombre</th>
          <th>Teléfono</th>
          <th>Fecha compra</th>
          <th>Producto</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <!-- Ventas se insertan aquí -->
      </tbody>
    </table>
  </div>

  <script>
    const form = document.getElementById('salesForm');
    const tableBody = document.querySelector('#salesTable tbody');

    form.addEventListener('submit', function(e) {
      e.preventDefault();

      const cedula = form.cedula.value.trim();
      const nombre = form.nombre.value.trim();
      const telefono = form.telefono.value.trim();
      const fecha = form.fecha.value;
      const producto = form.producto.value.trim();
      const precio = parseFloat(form.precio.value);
      const cantidad = parseInt(form.cantidad.value, 10);

      if (!cedula || !nombre || !telefono || !fecha || !producto || isNaN(precio) || isNaN(cantidad)) {
        alert('Por favor complete todos los campos correctamente.');
        return;
      }

      // Crear una nueva fila
      const row = document.createElement('tr');

      // Total = precio * cantidad
      const total = (precio * cantidad).toFixed(2);

      row.innerHTML = `
        <td>${cedula}</td>
        <td>${nombre}</td>
        <td>${telefono}</td>
        <td>${fecha}</td>
        <td>${producto}</td>
        <td>$${precio.toFixed(2)}</td>
        <td>${cantidad}</td>
        <td>$${total}</td>
      `;

      tableBody.appendChild(row);

      // Resetear el formulario para nueva entrada
      form.reset();
    });
  </script>
</body>
</html>
