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

    <div class="container-ajt">
        <main>
            <form action="/php/traitement_ajouter.php" method="POST" enctype="multipart/form-data">
                <input type="text" id="nom" name="nom" placeholder="Nom"><br>
                <input type="number" id="annee" name="annee" placeholder="Année" min="1900" max="2021"><br>
                <input type="text" id="cepages" name="cepages" placeholder="Cépages"><br>
                <input type="text" name="pays" id="pays" placeholder="Pays"><br>
                <input type="file" name="picture" id="picture"><br>
                <input type="text" id="region" name="region" placeholder="Région"><br>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Entrez une déscription"></textarea><br>
                <input type="submit" id="submit" value="Ajouter">
            </form>
        </main>
    </div>
</body>

</html>