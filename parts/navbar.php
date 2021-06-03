 <!-- Navbar bootstrap -->

 <?php
    // $connexion = '';
    // $deconnexion = '';

    // if (isset($_SESSION)) {
    //     $connexion = '<div class="d-flex me-5 btn-burger"><a href="/index.php">Se déconnecter</a></div>';
    //     unset($_SESSION);
    //     session_destroy();
    // } else {
    //     $connexion = '<div class="d-flex me-5 btn-burger"><a href="/page_connexion.php">Se connecter</a></div>';
    // }

    ?>
 <nav class="navbar navbar-expand-lg navbar-dark bg-light ms-5">
     <div class="container-fluid">
         <a class="navbar-brand" href="../index.php">My Cave</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item deco">
                     <a class="nav-link active" aria-current="page" href="../index.php">Accueil</a>
                 </li>
                 <li class="nav-item deco">
                     <a class="nav-link" href="../produits.php">Notre collection</a>
                 </li>
                 <li class="nav-item deco">
                     <a class="nav-link" href="#">Contact</a>
                 </li>
             </ul>
             <?php

                // $_SESSION['connected'] = true;

                if (isset($_SESSION['connected']) && $_SESSION['connected'] == true && !isset($_GET['action'])) {

                    echo '<div class="d-flex me-5 btn-burger"><a href="?action=deconnect">Se déconnecter</a></div>';
                } elseif (isset($_GET['action']) && $_GET['action'] == 'deconnect' && isset($_SESSION['connected'])) {
                    // $_SESSION['connected'] == false;
                    echo '<div class="d-flex me-5 btn-burger"><a href="/page_connexion.php">Se connecter</a></div>';
                    unset($_SESSION);
                    session_destroy();
                    // var_dump($_SESSION);
                } else {
                    echo '<div class="d-flex me-5 btn-burger"><a href="/page_connexion.php">Se connecter</a></div>';
                }
                ?>

         </div>
     </div>
 </nav>