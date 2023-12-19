
function calcularDescuento(tipoSeleccionado = '') {
    var cantidadEntradas = parseFloat(document.getElementById("cantidad").value);
    var categoria = document.getElementById("categoria").value;
    var descuento = 0;
    var totalAPagar = 0;

    if (Number.isNaN(cantidadEntradas)) {
        document.getElementById("cantidad").value = 1
        cantidadEntradas = 1
    }
    if (tipoSeleccionado == "")
        tipoSeleccionado = categoria

    switch (tipoSeleccionado) {
        case "estudiante":
            descuento = 0.8; // 80% de descuentos
            break;
        case "trainee":
            descuento = 0.5; // 50% de descuento
            break;
        case "junior":
            descuento = 0.15; // 15% de descuento
            break;
    }
    document.getElementById("categoria").value = tipoSeleccionado
    totalAPagar = (200 - (200 * descuento)) * cantidadEntradas;

    document.getElementById("totalAPagar").textContent = " $ " + totalAPagar.toFixed(2);
}

function changeSelect(elem) {
    calcularDescuento(elem.target.value)
}
