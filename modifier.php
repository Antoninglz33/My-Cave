<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cave</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="formulaire.css">
</head>

<body>
    <?php
    try {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=mycave', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }


    $reponse = $bdd->query('SELECT id, nom, description, picture FROM article WHERE id=' . $_GET['id'])->fetch();

    ?>
    <div class="formulaire">
        <form action="traitement_modif.php" method="POST">
            <input type="text" name="nom" id="nom" placeholder="Nom" value="<?php echo $reponse['nom'] ?>">

            <textarea type="text" name="description" id="description" placeholder="Entrez une Description" value="<?php echo $reponse['description'] ?>"> </textarea>

            <input type="file" name="picture" id="picture" value="<?php echo $reponse['picture'] ?>">

            <input type="hidden" name="id" value="<?php echo $reponse['id'] ?>">

            <input type="submit" id="btn" />
        </form>
    </div>
</body>

</html>