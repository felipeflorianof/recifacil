var search = document.getElementById('pesquisar');

search.addEventListener("keydown", (event) => {
    if(event.key === "Enter"){
        searchData();
    }
});


function searchData(){
    window.location = 'Systemponto.php?search='+search.value;
}