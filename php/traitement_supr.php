<?php


try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=sql11.freemysqlhosting.net;dbname=sql11416775', 'sql11416775', 'ye33AWzK8d');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

// $getid = (int)htmlspecialchars($_GET['id']);
// var_dump($getid);
// $sql = "DELETE * FROM article WHERE id = $getid";

$getid = (int)htmlspecialchars($_GET['id']);
$req = $bdd->exec("DELETE FROM article WHERE id = $getid");
// $req->bindParam(':id', $user_id, PDO::PARAM_INT);
// $req->execute();
header('Location:/produits.php');
