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
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <?php include('parts/header.php'); ?>

</head>

<body>

    <main>
        <div class="bg-container">
            <div class="btn-co">
                <a href="#"><i class="fas fa-chevron-left"></i></a>
            </div>

            <div class="connexion-cont">
                <h1>My Cave</h1>
                <form action="/php/traitement_connexion.php" method="POST">
                    <input type="email" id="email" name="email" placeholder="Email"><br>
                    <input type="password" id="password" name="password" placeholder="Mot de passe"><br>
                    <input type="submit" id="submit" value="CONNEXION">
                </form>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>

</html>