var links = document.getElementById("links")

function showMenu(){
    links.style.right ="0";
    links.style.display = "block";
}

function hideMenu(){
    links.style.right = "-200px";
    links.style.display = "none";
}
const login = document.getElementById("login")
const logar= document.getElementById("logar")
const fechar = document.getElementById("exit")
login.onclick = function (){
    logar.showModal()
}

fechar.onclick = function() {
    logar.close()
}

const cadastro = document.getElementById("cadastro")
const janela = document.getElementById("janela")
const exit = document.getElementById("sair")

cadastro.onclick = function (){
    links.style.transition = "1s";
    janela.showModal()
}

exit.onclick =  function () {
    links.style.transition = "1s";
    janela.close()
}