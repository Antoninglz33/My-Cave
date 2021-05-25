<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cave</title>
    <?php include('parts/header.php'); ?>


<body>
    <header>
        <?php include('parts/navbar.php'); ?>
    </header>

    <main>
        <form action="/php/traitement_ajouter.php" method="POST" enctype="multipart/form-data">
            <input type="text" id="nom" name="nom" placeholder="Nom">
            <input type="number" id="annee" name="annee" placeholder="Année" min="1900" max="2021">
            <input type="text" id="cepages" name="cepages" placeholder="Cépages">
            <input type="text" name="pays" id="pays" placeholder="Pays">
            <input type="file" name="picture" id="picture">
            <input type="text" id="region" name="region" placeholder="Région">
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Entrez une déscription"></textarea>
            <input type="submit" id="submit" value="Ajouter">
        </form>
    </main>

    <footer>
        <?php include('parts/footer.php'); ?>
    </footer>
</body>

</html>