function showTab(index) {
    const tabs = document.querySelectorAll('.tab');
    const contents = document.querySelectorAll('.tab-content');
    tabs.forEach((tab, i) => {
        tab.classList.toggle('active', i === index);
        contents[i].classList.toggle('active', i === index);
    });
}

const form = document.getElementById('transactionForm');
const tableBody = document.getElementById('transactionTable').getElementsByTagName('tbody')[0];

form.addEventListener('submit', function(event) {
    event.preventDefault();

    const cedula = form.cedula.value.trim();
    const nombreComprador = form.nombreComprador.value.trim();
    const telefono = form.telefono.value.trim();

    const fecha = form.fecha.value;
    const producto = form.producto.value.trim();
    const precio = parseFloat(form.precio.value).toFixed(2);
    const cantidad = parseInt(form.cantidad.value);

    const newRow = tableBody.insertRow();

    newRow.insertCell(0).textContent = cedula;
    newRow.insertCell(1).textContent = nombreComprador;
    newRow.insertCell(2).textContent = telefono;
    newRow.insertCell(3).textContent = fecha;
    newRow.insertCell(4).textContent = producto;
    newRow.insertCell(5).textContent = precio;
    newRow.insertCell(6).textContent = cantidad;

    form.reset();
});