function change(){
    // Deveria estar trocando o nome do botão após clicar nele. Revisar
    var button = document.querySelector('button#botao');

    if(button.innerHTML === 'Solicitar Coleta'){
        button.innerHTML = 'Finalizar';
    }else{
        button.innerHTML = 'Solicitar Coleta';
    }
}

function Mudarestado(el) {
    var display = document.getElementById(el).style.display;
    if (display == "none")
      document.getElementById(el).style.display = 'block';
    else
      document.getElementById(el).style.display = 'none';
  }





