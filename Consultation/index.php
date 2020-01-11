<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src="script.js" async></script> -->
    <script src="jquery-3.4.1.min.js"></script>
    <script src="main.js" async></script>
</head>
<body>
<nav>
<h1>Consultation BDD</h1>
    <form method="GET">

    <div class="boxChamp" id="boxTitre">
    <label for="typeSelect" class="label">Choisir le thème de recherche</label><br>
    <select id='typeSelect' class="champ">
    <option></option>
    <option id='1'>Livres</option>
    <option id='2'>Auteurs</option>
    </select>
    </div>

    <div class="boxChamp">
    <label for="criteres" class="label">Choisir un critère</label><br>
    <select id="criteres" class="champ">
    </select>
    </div>

    <div class="boxChamp">
    <label for="search" class="label">Mot clé</label><br>
    <input type="text" name="" id="search" class="champ" >
    <div id="response"></div>
    </div>

    <input type="submit" id="submit" value="ok">
    <div id="response"><div>
    </form>
</nav>

<div id="result"></div>

</body>
</html>