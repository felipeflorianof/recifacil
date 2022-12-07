const concordo = document.getElementById("concordo")
const dialog = document.querySelector("dialog")
const buttonClose = document.querySelector("dialog button")

concordo.onclick =function (){
    dialog.showModal()
}
buttonClose.onclick = function (){
    dialog.close()
}


//Buscar Endereço pelo CEP

function buscaCEP(){
    let cep = document.getElementById("cep").value;
    if(cep !== ""){
        let url = "https://brasilapi.com.br/api/cep/v1/" + cep;
        let req = new XMLHttpRequest();
        req.open("GET",url);
        req.send();

        //Tratamento de Dados da requisição
        req.onload = function() {
            if(req.status === 200){
                let endereco = JSON.parse(req.response);
                document.getElementById("rua").value = endereco.street;
                document.getElementById("estado").value = endereco.state;
                document.getElementById("cidade").value = endereco.city;
                document.getElementById("bairro").value = endereco.neighborhood;

            }
            else if(req.status === 404){
                alert("O CEP é invalido");

            }
            else{
                alert("Erro ao fazer a requisição");
            }
        }
    }
}

window.onload = function() {
    let cep = document.getElementById(cep);
    cep.addEventListener("blur", buscaCEP);
}