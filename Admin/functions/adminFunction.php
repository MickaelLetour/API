<?php

require_once "../API/config/Connexion.php";

function login (string $username, string $password){
    $dbh = new Connexion();
    $stmt = $dbh->getPdo()->prepare("SELECT password FROM users WHERE username = :username");
    $stmt->bindParam(':username',$username,PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch();
    $hash = $result[0];
    $correctPassword = password_verify($_POST["password"], $hash);
    if($correctPassword){
        session_start ();
        $_SESSION['username'] = $username;
        header ('location: index.php');
    }
    else  {
        echo "login/password incorrect";
    }
}

function setAuthor(string $lname, string $fname, string $country){
    $dbh = new Connexion();
    $stmt = $dbh->getPdo()->prepare("SELECT country.id FROM country where country.name LIKE :country");
    $stmt->bindParam(':country',$country,PDO::PARAM_STR);
    $stmt->execute();
    $id = $stmt->fetch();
    $country_id = $id[0];
    $stmt = $dbh->getPdo()->prepare("INSERT INTO author (lname,fname,country_id) VALUES (:lname,:fname,:country_id);");
    $stmt->bindParam(':lname',$lname,PDO::PARAM_STR);
    $stmt->bindParam(':fname',$fname,PDO::PARAM_STR);
    $stmt->bindParam(':country_id',$country_id,PDO::PARAM_INT);
    $stmt->execute();
    header ('location: index.php');
}

function getCountry(){
    $dbh = new Connexion();
    $stmt = $dbh->getPdo()->prepare("SELECT * FROM country");
    $stmt->execute();
    return $stmt->fetchAll();
}

function register(string $username,string $password,string $email){
    $dbh = new Connexion();
    //On utilise alors notre fonction password_hash :
    $hash = password_hash($password, PASSWORD_DEFAULT);
    //Puis on stock le résultat dans la base de données :
    $stmt = $dbh->getpdo()->prepare('INSERT INTO users (username,password,email) VALUES (:username,:password,:email);');
    $stmt->bindParam(':username', $username,PDO::PARAM_STR);
    $stmt->bindParam(':password', $hash,PDO::PARAM_STR);
    $stmt->bindParam(':email', $email,PDO::PARAM_STR); 
    $stmt->execute();
    header('Location: index.php');
}

?>