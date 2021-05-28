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
        $datas['nom'] = htmlspecialchars($_POST['nom']);
    }

    if (empty($_POST['description']) || strlen($_POST['description']) < 4) {
        $errors['description'] = "erreur sur description";
    } else {
        $datas['description'] = htmlspecialchars($_POST['description']);
    }

    // if(empty($_FILES)) {
    //     $file = 
    // }
    if (!empty($_FILES['picture']['tmp_name'])) {
        //gestion d'image
        $dossier = 'upload';
        $fichier = $_FILES['picture']['name'];
        $taille_maxi = 100000;
        $taille = filesize($_FILES['picture']['tmp_name']);
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $extension = strrchr($_FILES['picture']['name'], '.');


        //Début des vérifications de sécurité...
        if (!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau c'est queele n'est pas valide
        {
            $errors['picture'] = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
        }

        if ($taille > $taille_maxi) {
            $errors['picture_size'] = 'Le fichier est trop gros...';
        }

        if (!isset($errors['picture']) && !isset($errors['picture_size'])) //S'il n'y a pas d'erreur, on upload
        {
            //On formate le nom du fichier ici...
            $fichier = strtr(
                $fichier,
                'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
                'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy'
            );

            if (!is_dir("../assets/img/" . $dossier)) {
                mkdir("../assets/img/" . $dossier, 0755);
            }

            $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

            if (!file_exists('../assets/img/upload/' . $fichier)) {

                if (move_uploaded_file($_FILES['picture']['tmp_name'], "../assets/img/" . $dossier . "/" . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
                {
                    echo 'Upload effectué avec succès !';
                } else //Sinon (la fonction renvoie FALSE).
                {
                    $errors['upload'] = 'Echec de l\'upload !';
                }
            }
            $datas['picture'] = $fichier;
        }
    }
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error;
        }
    } else {
        header('Location:/produits.php');
    }


    if (!empty($_POST)) {
        $sql = "UPDATE article SET nom = :nom, description = :description, picture = :picture WHERE id=" . $_POST['id'];
    } else {
        $sql = "UPDATE article SET nom = :nom, description = :description WHERE id=" . $_POST['id'];
    }


    $stmt = $bdd->prepare($sql);
    $stmt->execute($datas);
} else {
    echo 'aucune données reçu';
    die;
}
