<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <script src="script/jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="script/main.js"></script>
    <title>AdminBook.com</title>
</head>
<body>


<?php

session_start();
if (isset($_SESSION['username'])){    
    echo "<header id='connected'><div id='head'>";
    $user = $_SESSION['username'];
    echo "<h3>Bienvenue $user</h3>
    <a id='disconnect' href='../API/logout.php'>Deconnection</a>
    <a id='switch' href='../Consultation/index.php'>Consultation</a>
    </div>
    <div id='foot'>
    <h3>Nouvel Admin</h3>";
    if(isset($_SESSION['errors'])){
        $errors = $_SESSION['errors'];
        if(!empty($errors)){ 
            echo "<div class='alert'>
                <p>Vous n'avez pas rempli le formulaire correctement</p>
                <ul>";
                foreach($errors as $error){
                    echo "<li> $error </li>";
                } 
                echo "</ul>
            </div>";
            unset($_SESSION['errors']);
        }
    }
   echo "<form id='register' action='../API/admin.php' method='POST'>

        <label for='userId'>Identifiant</label><br>
        <input type='text' id='userId' name='userId' minlength='6' required><br>

        <label for='password'>Mot de passe</label><br>
        <input type='password' id='password' name='password' minlength='6' required><br>

        <label for='password2'>Confirmez le mot de passe</label><br>
        <input type='password' id='password2' name='password2' minlength='6' required><br>

        <label for='email'>Email</label><br>
        <input type='email' id='email' name='email' minlength='6' required><br>

        <input id='submit' type='submit'>

    </form>";
    
    if (isset($_SESSION['flash'])){
        foreach($_SESSION['flash'] as $type =>$message){ 
    
          echo "<div class='alert'= $type>";
          
          echo $message;
          
          echo "</div>";
        }
    
        unset($_SESSION['flash']);  
    }

    echo "</div>
    </header>";
}
else {
    
    echo "<header id='disconnected'>";
    echo "<div id='head'>";
    echo "<h3>Connection</h3>";
    echo "<form action='../API/admin.php' method='POST'>

    <label for='username'>Identifiant</label><br>
    <input type='text' id='username' name='username' minlength='6' required><br>

    <label for='password'>Mot de passe</label><br>
    <input type='password' id='password' name='password' minlength='6' required><br>
    <a id='pwdForget' href='forget.php'>mot de passe oublié</a><br>

    <input id='submit' type='submit'>

    </form>

    </div>";
    echo "<a id='switchDis' href='../Consultation/index.php'>Consultation des livres et auteurs</a>

</header>";

echo "<main id='mainDisconnected'>
        <h2>Bienvenue sur Consult.books.com!!</h2>
        <p> Si vous êtes sur cette page c'est que vous êtes admin de ce site.<br>
        Pour ajouter de nouveaux livres ou auteurs, veuillez d'abord vous identifier!!</p>
    </main>";
}
?>

<?php
    if (isset($_SESSION['username'])){
?>
    


    <main id="mainConnected">
        <label for="chooseElement">Choisissez l'élément a ajouter</label>
            <select id="chooseElement" name="chooseElement">
                <option></option>
                <option>Livre</option>
                <option>Auteur</option>
                <option>Catégorie</option>
                <option>Pays</option>
            </select><br>
        <div id="formAdd">
        </div>
    </main> 
<?php
}
?>

</body>
</html>