<?php
session_start();
try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=mycave', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

$user = []; //DECLARER UN TABLEAU USERS[] QUI COMPORTERA LES USERS
$errors = []; //DECLARER UN TABLEAU ERRORS[] QUI COMPORTERA LES ERREURS 

if (!empty($_POST)) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        $req = $bdd->prepare('SELECT * FROM utilisateur WHERE email = :email');
    $req->execute(array(
        'email' => $_POST['email']
    ));
    $user = $req->fetch(PDO::FETCH_ASSOC);
    if (!empty($user)) {
        if (password_verify($_POST['password'], $user['mdp'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['connected'] = true;
            header('Location:/index.php');
        } else {
            $errors['password'] = 'Erreur! Mot de passe ou adresse mail inconnue.';
        }
    } else {
        $errors['utilisateur'] = 'Erreur! Mot de passe ou adresse mail inconnue.';
    }
} else {
    $errors['form'] = 'Erreur! Formulaire vide.';
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error;
    }
    die;
}
