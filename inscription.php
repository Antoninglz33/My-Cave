<?php

$errors = [];
$fichier = '';


if(!empty($_POST)) {
    $firstname = htmlspecialchars(strip_tags($_POST['firstname']));
    $lastname = htmlspecialchars(strip_tags($_POST['lastname']));
    $pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $password = htmlspecialchars(strip_tags($_POST['password']));
    $password2 = htmlspecialchars(strip_tags($_POST['password-2']));
}else{
    echo 'aucune données reçu';
    die;
}

if(empty($firstname) || strlen($firstname) < 4){
    $errors['firstname']= "erreur sur firstname";
}


if(empty($lastname) || strlen($lastname) < 4){
    $errors['lastname']= "erreur sur lastname";
}


if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email']= "erreur sur l'email";
}

if($password !== $password2 && strlen($password) < 6) {
    $errors['password']= "erreur sur le password";
}

   // ajouté le nom de l'image dans le tableau data['avatar'] pour insertion en bdd, gérer si l'image est null y stocké le nom de l'image si défini 


if(!empty($errors)) {
    foreach($errors as $error){
        echo $error;
    }
    die;
}

$data = array(
    "prenom" => $firstname,
    "nom" => $lastname,
    "email" => $email,
    "password" => password_hash($password, PASSWORD_DEFAULT)
    );


 try {
     $dbh = new PDO('mysql:host=sql11.freemysqlhosting.net;dbname=sql11416775', 'sql11416775', 'ye33AWzK8d');
 } catch (PDOException $e) {
     print "Erreur !: " . $e->getMessage() . "<br/>";
     die();
 }
 $sql = "INSERT INTO utilisateur(prenom, nom, email, mdp) VALUES(:prenom, :nom, :email, :password)";
 $stmt= $dbh->prepare($sql);
 $stmt->execute($data);
 
 echo 'Bienvenue'. " " . $firstname;
