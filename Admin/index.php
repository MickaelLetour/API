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
    <a id='disconnect' href='logout.php'>Deconnection</a>
    </div>
    <div id='foot'>
    <h3>Nouvel Admin</h3>

    <form id='register' action='admin.php' method='POST'>

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
    
    echo "</div>
    </header>";
}
else {
    echo "<header id='disconnected'><div id='head'>";
    echo "<form action='admin.php' method='POST'>

    <label for='username'>Identifiant</label><br>
    <input type='text' id='username' name='username' minlength='6' required><br>

    <label for='password'>Mot de passe</label><br>
    <input type='password' id='password' name='password' minlength='6' required><br>

    <input id='submit' type='submit'>

    </form>

    </div>
</header>";

echo "<main>
        <h2>Bienvenue sur Consult.books.com!!</h2>
        <p> Si vous êtes sur cette page c'est que vous êtes admin de ce site.<br>
        Pour ajouter de nouveaux livres ou auteurs, veuillez d'abord vous identifier!!</p>
    </main>";
}
?>

<?php
    if (isset($_SESSION['username'])){
?>
    <main><div id='addAuteur'>
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

        </form></div>
    </main>
    <?php
    }
    ?>

</body>
</html>