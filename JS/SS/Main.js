let form = document.getElementById('notify')
let factura = document.getElementById('factura')
let inventario = document.getElementById('inv')

function notify() {
    factura.style.display = 'none'
    inventario.style.display = 'none'
    form.style.display = 'block'
}

function fact() {
    form.style.display = 'none'
    inventario.style.display = 'none'
    factura.style.display = 'block'
}

function Stock() {
    factura.style.display = 'none'
    form.style.display = 'none'
    inventario.style.display = 'block'
}