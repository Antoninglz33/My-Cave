<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cave</title>
    <?php include('parts/header.php'); ?>
</head>

<body>


    <div class="container-modif">
    <?php
    try {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=mycave', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }

    $getid= (int)htmlspecialchars($_GET['id']);
    $reponse = $bdd->query('SELECT id, nom, description, picture FROM article WHERE id=' . $getid)->fetch();

    ?>
    <div class="formulaire">
        <form action="./php/traitement_modif.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="nom" id="nom" placeholder="Nom" value="<?php echo $reponse['nom'] ?>"> <br>

            <textarea type="text" name="description" id="description"> <?php echo $reponse['description'] ?></textarea><br>

            <input type="file" name="picture" id="picture" value="<?php echo $reponse['picture'] ?>"><br>

            <input type="hidden" name="id" value="<?php echo $reponse['id'] ?>">

            <input type="submit" id="btn" />
        </form>
    </div>
    </div>

</body>

</html>