var search = document.getElementById('pesquisar');

search.addEventListener("keydown", (event) => {
    if(event.key === "Enter"){
        searchData();
    }
});

function searchData(){
    window.location = 'Systemponto.php?search='+search.value;
}

 const saida = document.querySelector("dialog .saida")
 const dialog = document.querySelector("dialog")
 const abrir = document.getElementById("btn")

abrir.onclick = function() {
    dialog.show()
}

saida.onclick = function (){
    dialog.close()
}