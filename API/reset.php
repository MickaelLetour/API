<?php

if (isset($_GET['id']) && isset($_GET['token'])){
    require_once "./config/Connexion.php";    
    require_once "./Functions/adminFunction.php"; 
    $id=$_GET['id'];
    $token=$_GET['token'];
    $dbh = new Connexion();
    $stmt = $dbh->getpdo()->prepare('SELECT * FROM users WHERE id = :id AND reset_token = :token AND reset_at > DATE_SUB(current_date(), Interval 2 MINUTE)');
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->bindParam(':token',$token,PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch();
    if($user){
        debug($user);

    } else {
        $_SESSION['flash']['danger'] = "Ce token n'est plus valide"; 
        
        header('Location: ../Admin/index.php');
        exit();
    }

} else {

    header('Location: ../Admin/index.php');
    exit(); // car pas besoin d'afficher le formulaire
}

?>

<h1> Réinitialiser votre mot de passe </h1>

<form action="#" method="POST">

<div class="form-group">

    <label   for="">Mot de passe </label>

    <input type="password" name="password" class="form-control">

</div>

<div class="form-group">

<label   for="">Confirmation de votre mot de passe</label>

<input type="password" name="password_confirm" class="form-control">

</div>

<button type="submit" class=" btn btn-primary">Réinitialiser votre mot de passe </button>

</form>




