let bann = document.getElementById('bann')
let form = document.getElementById('form')
let login = document.getElementById('login')

function Create() {
    bann.style.display = "none"
    login.style.display = 'none'
    form.style.display = "block"
}


function Login() {
    bann.style.display = "none"
    form.style.display = "none"
    login.style.display = 'block'
}