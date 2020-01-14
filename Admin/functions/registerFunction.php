<?php

require_once "../API/config/Connexion.php";

function register(){
    $dbh = new Connexion();
    //On vérifie que l'utilisateur a bien envoyé les informations demandées 
    if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["password2"])){
    	//On vérifie que password et password2 sont identiques
    	if($_POST["password"] == $_POST["password2"]){
    		//On utilise alors notre fonction password_hash :
    		$hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    		//Puis on stock le résultat dans la base de données :
    		$stmt = $dbh->getpdo()->prepare('INSERT INTO users (username, email, password) VALUES(:username,:email, :password);');
    		$stmt->bindParam(':username', $_POST["username"]);
    		$stmt->bindParam(':password', $hash);
    		$stmt->execute();
    		header('Location: ../members.php');
            exit();
        }
    }
}


?>