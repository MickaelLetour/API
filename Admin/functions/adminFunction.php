<?php

require_once "../API/config/Connexion.php";

function login (string $username, string $password){
    $file = 'config/user.json';
    $data = json_decode(file_get_contents($file));
    $user = $data->admin->user;
    $pwd = $data->admin->pwd;
    if(($password === $pwd) && ($username === $user)){
        session_start ();
        $_SESSION['username'] = $user;
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

?>