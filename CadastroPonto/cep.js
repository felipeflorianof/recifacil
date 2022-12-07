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
                document.getElementByNome("rua").value = endereco.street;
                document.getElementByNome("estado").value = endereco.state;
                document.getElementByNome("cidade").value = endereco.city;
                document.getElementByNome("bairro").value = endereco.neighborhood;

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