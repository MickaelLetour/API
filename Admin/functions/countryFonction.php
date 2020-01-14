<?php

require_once "../API/config/Connexion.php";

function getCountry(){
    $dbh = new Connexion();
    $stmt = $dbh->getPdo()->prepare("SELECT * FROM country");
    $stmt->execute();
    return $stmt->fetchAll();
}