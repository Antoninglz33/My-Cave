    <?php

    $errors = [];
    $fichier = '';


    if (!empty($_POST)) {
        $nom = strip_tags($_POST['nom']);
        $annee = strip_tags($_POST['annee']);
        $cepages = strip_tags($_POST['cepages']);
        $pays = strip_tags($_POST['pays']);
        $region = strip_tags($_POST['region']);
        $description = strip_tags($_POST['description']);
    } else {
        echo 'aucune données reçu';
        die;
    }

    if (empty($nom) || strlen($nom) < 4) {
        $errors['nom'] = "erreur sur le nom";
    } else {
        $nom = htmlspecialchars($_POST['nom']);
        $data['nom'] = strip_tags($_POST['nom']);
    }

    if (empty($annee) || strlen($annee) < 4) {
        $errors['annee'] = "erreur sur le annee";
    } else {
        $annee = htmlspecialchars($_POST['annee']);
        $data['annee'] = strip_tags($_POST['annee']);
    }


    if (empty($cepages) || strlen($cepages) < 4) {
        $errors['cepages'] = "erreur sur cepages";
    } else {
        $cepages = htmlspecialchars($_POST['cepages']);
        $data['cepages'] = strip_tags($_POST['cepages']);
    }

    if (empty($pays) || strlen($pays) < 2) {
        $errors['pays'] = "erreur sur pays";
    } else {
        $pays = htmlspecialchars($_POST['pays']);
        $data['pays'] = strip_tags($_POST['pays']);
    }

    if (empty($region) || strlen($region) < 4) {
        $errors['region'] = "erreur sur region";
    } else {
        $region = htmlspecialchars($_POST['region']);
        $data['region'] = strip_tags($_POST['region']);
    }

    if (empty($description) || strlen($description) < 4) {
        $errors['description'] = "erreur sur description";
    }



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

            if (move_uploaded_file($_FILES['picture']['tmp_name'], "../assets/img/" . $dossier . "/" . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            {
                header('Location:/produits.php');
            } else //Sinon (la fonction renvoie FALSE).
            {
                $errors['upload'] = 'Echec de l\'upload !';
            }
        }
    }


    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . '<br><br>';
        }
        die;
    }

    $data = array(
        "nom" => $nom,
        "annee" => $annee,
        "cepages" => $cepages,
        "pays" => $pays,
        "region" => $region,
        "description" => $description,
        "picture" => !empty($fichier) ? $fichier : null
    );


    try {
        $bdd = new PDO('mysql:host=localhost;dbname=mycave', 'root', '');
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    $req = $bdd->prepare('INSERT INTO article(nom, annee, cepages, pays, region, description, picture) VALUES(:nom, :annee, :cepages, :pays, :region, :description, :picture)');
    $req->execute($data);
