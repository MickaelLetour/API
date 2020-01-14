<?php
header("Access-Control-Allow-Origin: *");
require_once "./functions/adminFunction.php";

header("Content-Type: application/json");
header("Content-Encoding: UTF-8");

if(!empty($_POST['username']) && is_string($_POST['username']) && !empty($_POST['password']) && is_string($_POST['password'])){
    login($_POST['username'],$_POST['password']);
}
else if (!empty($_POST['lname'])&& !empty($_POST['fname']) && !empty($_POST['country']) && is_string($_POST['lname']) && is_string($_POST['fname']) && is_string($_POST['country'])){
    setAuthor($_POST['lname'],$_POST['fname'],$_POST['country']);
}
else if (!empty($_POST['userId'])&& !empty($_POST['password']) && !empty($_POST['password2']) && !empty($_POST['email']) && is_string($_POST['userId']) && is_string($_POST['password']) && is_string($_POST['password2']) && is_string($_POST['email']) && $_POST["password"] === $_POST["password2"]){
    register($_POST['userId'],$_POST['password'],$_POST['email']);
}
else echo "problème";
