$(function(){

    $('#chooseElement').change(function(){
        element = $('#chooseElement').val();
        $('#formAdd').children().remove();
        if (element === "Auteur"){
            $('#formAdd').append(`
            <h1>Ajouter un Auteur</h1>
            <form action="admin.php" method="POST" id="addAuthor">

                <label for="lname">Nom</label><br>
                <input type="text" id="lname" name="lname" required><br>

                <label for="fname">Prénom</label><br>
                <input type="text" id="fname" name="fname" required><br>

                <label for="country">Pays</label><br>
                <select id="country" name="country" required>
                    <option></option>
                </select><br>

                <input type="submit" id="submit">

            </form>
            `)
            $.ajax({
                type: "GET",
                url: "http://api.test/Admin/getCountry.php",
                data: "",
                dataType : "json",
                success : function(response){
                    console.log("ok");
                }
            })
            .done(function(json){
                console.log(json);
                for(let option of json){
                $('#country').append(`
                <option>${option.name}</option>
                `)  
                }    
            })
        }
        if (element === "Livre"){
            $('#formAdd').append(`
            <h1>Ajouter un Livre</h1>
            <form action="admin.php" method="POST" id="addBook">

                <label for="titleBook">Titre</label><br>
                <input type="text" id="titleBook" name="titleBook" required><br>

                <label for="synopsis">Synopsis</label><br>
                <input type="text" id="synopsis" name="synopsis" required><br>

                <label for="authorName">Auteur</label><br>
                <select id="authorName" name="authorName" required>
                    <option></option>
                </select><br>

                <label for="categoryName">Catégorie</label><br>
                <select id="categoryName" name="categoryName" required>
                    <option></option>
                </select><br>

                <input type="submit" id="submit">

            </form>
            `)
            $.ajax({
                type: "GET",
                url: "http://api.test/API/getAuthor.php",
                data: "",
                dataType : "json",
                success : function(response){
                    console.log("ok");
                }
            })
            .done(function(json){
                console.log(json);
                for(let option of json){
                $('#authorName').append(`
                <option>${option.lname}</option>
                `)  
                }    
            })
            $.ajax({
                type: "GET",
                url: "http://api.test/API/getCategory.php",
                data: "",
                dataType : "json",
                success : function(response){
                    console.log("ok");
                }
            })
            .done(function(json){
                console.log(json);
                for(let option of json){
                $('#categoryName').append(`
                <option>${option.name}</option>
                `)  
                }    
            })
        }
        if (element === "Catégorie"){
            $('#formAdd').append(`
            <h1>Ajouter une catégorie</h1>
            <form action="../API/admin.php" method="POST" id="addCatégory">

                <label for="categoryName">Nom de catégorie</label><br>
                <input type="text" id="categoryName" name="categoryName" required><br>

                <input type="submit" id="submit">

            </form>
            `)
        }
        if (element === "Pays"){
            $('#formAdd').append(`
            <h1>Ajouter un Pays</h1>
            <form action="../API/admin.php" method="POST" id="addCountry">

                <label for="countryName">Nom du pays</label><br>
                <input type="text" id="countryName" name="countryName" required><br>

                <input type="submit" id="submit">

            </form>
            `)
        }
    })



});
