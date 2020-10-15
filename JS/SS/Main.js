let form = document.getElementById('notify')
let factura = document.getElementById('factura')

function notify() {
    factura.style.display = 'none'
    form.style.display = 'block'
}

function fact() {
    form.style.display = 'none'
    factura.style.display = 'block'
}