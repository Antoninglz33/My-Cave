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


</head>

<body>

    <header>
        <!-- Navbar bootstrap -->
        <?php require('parts/navbar.php'); ?>
    </header>

    <main>

        <div class="bg-produits">
            <div class="title-produits">
                <h1>Notre collection</h1>
                <?php

                // $_SESSION['connected'] = true;

                if (isset($_SESSION['connected']) && $_SESSION['connected'] == true && !isset($_GET['action'])) {
                    echo '<a href="./ajouter.php" class="btn-ajout">Ajouter un article</a>';
                    // unset($_SESSION);
                }
                ?>
            </div>
            <div class="trait-produits"></div>


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
            $reponse = $bdd->query('SELECT id, nom, description, picture FROM article');

            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch()) {
            ?>
                <div class="produits-cont">
                    <div class="modif-del">
                        <?php

                        // $_SESSION['connected'] = true;

                        if (isset($_SESSION['connected']) && $_SESSION['connected'] == true && !isset($_GET['action'])) {
                            echo '<a href="./modifier.php?id=' . $donnees['id'] . '">Modifier</a>';
                            echo '<a href="./php/traitement_supr.php?id=' . $donnees['id'] . '">Suprimer</a>';
                            // unset($_SESSION);
                        }
                        ?>
                    </div>
                    <div class="produits-grid">
                        <div class="img-produits">
                            <img src="./assets/img/upload/<?php echo $donnees['picture']; ?>" alt="<?php echo $donnees['nom']; ?>">
                        </div>
                        <div class="text-cont">
                            <h2><?php echo $donnees['nom']; ?></h2>
                            <p><?php echo $donnees['description']; ?></p>
                            <a href="./page-produit.php?id=<?php echo $donnees['id'] ?>">Voir le produit</a>
                        </div>
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