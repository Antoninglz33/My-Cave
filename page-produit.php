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

    <header>
        <!-- Navbar bootstrap -->
        <?php include('parts/navbar.php'); ?>
    </header>


    <main>

        <?php
        try {
            // On se connecte à MySQL
            $bdd = new PDO('mysql:host=localhost;dbname=mycave', 'root', '');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : ' . $e->getMessage());
        }


        // Si tout va bien, on peut continuer

        // On récupère tout le contenu de la table jeux_video
        $getid = (int)htmlspecialchars($_GET['id']);
        $reponse = $bdd->query("SELECT id , nom, cepages, annee, pays, description, picture FROM article WHERE id = $getid ");

        // On affiche chaque entrée une à une
        while ($donnees = $reponse->fetch()) {
        ?>

            <div class="bg-produit">
                <div class="title-produit">
                    <h1><?php echo $donnees['nom']; ?></h1>
                </div>
                <div class="grid-bouteille-produit">
                    <div class="txt-left">
                        <h2><?php echo $donnees['pays']; ?></h2>
                        <h2><?php echo $donnees['cepages']; ?></h2>
                    </div>
                    <div class="img-center">
                        <img src="./assets/img/upload/<?php echo $donnees['picture']; ?>" alt="<?php echo $donnees['nom']; ?>">
                    </div>
                    <div class="txt-right">
                        <h2><?php echo $donnees['annee']; ?></h2>
                    </div>
                </div>
                <div class="p-produit">
                    <?php echo $donnees['description']; ?>
                </div>
            </div>

        <?php
        }

        $reponse->closeCursor(); // Termine le traitement de la requête

        ?>

    </main>


    <footer>
        <?php include('parts/footer.php'); ?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>

</html>