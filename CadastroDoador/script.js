const concordo = document.getElementById("concordo")
const janela = document.querySelector("dialog")
const buttonClose = document.querySelector("dialog button")

concordo.onclick =function (){
    janela.showModal()
}

buttonClose.onclick = function (){
    janela.close()
}

