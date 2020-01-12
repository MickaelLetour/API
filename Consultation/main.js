$(function(){
    let type = $('#typeSelect');
    let option1= $("<option></option><option>id</option><option>Titre</option><option>Auteur</option><option>Catégorie</option>");
    let criteres = $("#criteres");
    let option2= $("<option></option><option>id</option><option>Pays</option><option>Nom</option><option>Prénom</option>");
    let search=$("#search");
    let result=$("#result");
    let response=$('#response');
    let criteresValue="";
    let link;
    let submit = $('#submit');
    let searchValue ="";

    type.on('change', function(){
        if (type.val() == "Livres"){
            console.log(type.val());
            criteres.children().remove();
            option1.appendTo(criteres);
            link = "http://api.test/API/books.php";
            console.log(link);
        }
        else if (type.val() == "Auteurs"){
            console.log(type.val());
            criteres.children().remove();
            option2.appendTo(criteres);
            link = "http://api.test/API/author.php";
            console.log(link);
        }
    }) 

    let list= [
        "Premier",
        "second", 
        "third",
        "fouth",
        "fifth",
    ];

    $('#search').autocomplete({
        source : list

    })

    criteres.on('change', function(){
        criteresValue = criteres.val();
        if(criteresValue=='id'){
            criteresValue = 'id';
        }
        else if (criteresValue == "Titre"){
            criteresValue = "title" ;
        }
        else if (criteresValue == "Auteur"){
            criteresValue = "lname" ;
        }
        else if (criteresValue == "Catégorie"){
            criteresValue = "name" ;
        }
        else if (criteresValue == "Pays"){
            criteresValue = "country" ;
        }
        else if (criteresValue == "Nom"){
            criteresValue = "lname" ;
        }
        else if (criteresValue == "Prénom"){
            criteresValue = "fname" ;
        }
        console.log(criteresValue);
    })

    search.on('keyup', function(){
        searchValue = search.val();
        console.log(searchValue);
    })

    function secondAjax(a,b){
        $.ajax({
            type: "GET",
            url: "http://api.test/API/books.php",             
            data: {Author : a.lname},
            dataType: "json",
            success: function (response) {
                console.log('i work');
            }
        })
        .done(function(json){
            console.log(json);
            for(let book of json) {
                $("#listBooks"+b).append(`
                    <li>${book.title}</li>
                `)   
            } 
        })
        console.log(b);
    }

    submit.on('click',function(){
        event.preventDefault();
        $.ajax({
            type: "GET",
            url: link,             
            data: {column : criteresValue , keyWord : searchValue},
            dataType: "json",
            success: function (response) {
                console.log('i work');
            }
        })
        .done(function(json){
            console.log(json);
            var n=0;
            result.children().remove();
            for(let item of json) {
                if (type.val() == "Livres"){
                    $('#result').append(`
                        <ul>
                            <li><strong>ID Livre :</strong> ${item.id}</li>
                            <li><strong>Titre :</strong> ${item.title}</li>
                            <li><strong>Contenu :</strong> ${item.abstract}</li>
                            <li><strong>Auteur :</strong> ${item.lname}</li>
                            <li><strong>Catégorie:</strong> ${item.name}</li>
                        </ul>
                        <hr>
                    `)
                }
                else if (type.val() == "Auteurs"){
                    $('#result').append(`
                        <ul>
                            <li><strong>ID Auteur :</strong> ${item.id}</li>
                            <li><strong>Prenom :</strong> ${item.fname}</li>
                            <li><strong>Nom :</strong> ${item.lname}</li>
                            <li><strong>Pays  :</strong> ${item.name}</li>
                            <li><strong>Livre(s) écrit(s) :</strong>
                                <ul id="listBooks${n}" class="listBooks"></ul>
                            </li>
                        </ul>
                        <hr>
                    `)
                    secondAjax(item,n);
                }
                n++;
            } 
        }) 
    }) 
});


    