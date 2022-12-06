    const form   = document.getElementById('form');
    const campos = document.querySelectorAll('.required');
    const spans  = document.querySelectorAll('.span-required');
    const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

    form.addEventListener('submit_recycling_center', (event) => {
        event.preventDefault();
        nameValidate();
        emailValidate();
        mainPasswordValidate();
        comparePassword();
    });

    function setError(index){
        campos[index].style.border = '2px solid #e63636';
        spans[index].style.display = 'block';
    }

    function removeError(index){
        campos[index].style.border = '';
        spans[index].style.display = 'none';
    }

    function nameValidate(){
        if(campos[0].value.length < 3)
        {
            setError(0);
        }
        else
        {
            removeError(0);
        }
    }

    function emailValidate(){
        if(!emailRegex.test(campos[1].value))
        {
            setError(1);
        }
        else
        {
            removeError(1);
        }
    }

    function mainPasswordValidate(){
        if(campos[2].value.length < 8)
        {
            setError(2);
        }
        else
        {
            removeError(2);
            comparePassword();
        }
    }

    function comparePassword(){
        if(campos[2].value == campos[3].value && campos[3].value.length >= 8)
        {
            removeError(3);
        }
        else
        {
            setError(3);
        }
    }

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
                removeError(4);
            }
            else if(req.status === 404){
                setError(4);
            }
            else{
                setError(4);
            }
        }
    }
}

window.onload = function() {
    let cep = document.getElementById("cep");
    cep.addEventListener("blur", buscaCEP);
}


