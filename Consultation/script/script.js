let button = document.getElementById("button");
button.addEventListener("click", function(){
    let id = document.getElementById("getBooksById").value;
    requete(id);
})  

function requete(nb) {
    let resultat = document.getElementById("result");
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        resultat.innerHTML = this.responseText;
        }
    }
    xhr.open("GET","http://api.test/books.php?idBooks="+nb, true);
    xhr.send();
}
