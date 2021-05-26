<?php


try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=mycave', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

// initialisation de 2 tableaux vide pour stocker mes erreurs et mes données traitées.

$errors = [];
// 1 tableau pour stocker mes données traitées 
$datas = [];

if (!empty($_POST)) {


    if (empty($_POST['nom']) || strlen($_POST['nom']) < 4) {
        $errors['nom'] = "erreur sur le nom";
    } else {
        $datas['nom'] = strip_tags($_POST['nom']);
    }

    if (empty($_POST['description']) || strlen($_POST['description']) < 4) {
        $errors['description'] = "erreur sur description";
    } else {
        $datas['description'] = strip_tags($_POST['description']);
    }


    if (isset($errors)) {
        foreach ($errors as $error) {
            echo $error;
        }
        die;
    }


    if (!empty($_POST)) {
        $sql = "UPDATE article SET nom = :nom, description = :description, picture = :picture WHERE id=" . $_POST['id'];
    } else {
        $sql = "UPDATE article SET nom = :nom, description = :description, picture = :picture WHERE id=" . $_POST['id'];;
    }

    $stmt = $bdd->prepare($sql);
    $stmt->execute($datas);
} else {
    echo 'aucune données reçu';
    die;
}
