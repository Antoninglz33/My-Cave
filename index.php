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
        <?php include('parts/navbar.php'); ?>
        <!-- PARTIE HOME PAGE 100VH-->

        <div class="bg-accueil">
            <div class="acc-txt-container">
                <h1>Celui qui sait déguster ne boit
                    plus jamais de vin, mais il goûte
                    ses suaves secrets.
                </h1>
                <h2>Salvador Dali</h2>
            </div>
            <div class="picto-acc"><i class="fas fa-chevron-down"></i></div>
            <div class="scroll">
                <ul>
                    <li>Scroll</li>
                    <li>
                        <div class="scroll-2">
                            <ul>
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
    </header>
    <!-- PARTIE BOUTEILLE -->
    <main>
        <div class="bg-bouteille">
            <div class="bloc-bottle">
                <div class="bouteille-container">
                    <div class="grid-bouteille">
                        <div class="img-bouteille">
                            <img src="./assets/img/block_nine.png" alt="bouteille block nine">
                        </div>
                        <div class="text-bouteille">
                            <h3>Domaine du
                                pavillon</h3>
                            <h4>2007</h4>
                            <div class="trait-bottle"></div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla nesciunt ad eligendi
                                ullam
                                minus. Architecto nisi repellendus libero molestiae porro?</p>
                            <a href="">Voir plus <span><i class="fas fa-chevron-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="bouteille-container">
                    <div class="grid-bouteille">
                        <div class="img-bouteille">
                            <img src="./assets/img/bouscat.png" alt="bouteille bouscat">
                        </div>
                        <div class="text-bouteille">
                            <h3>Domaine du
                                pavillon</h3>
                            <h4>2007</h4>
                            <div class="trait-bottle"></div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla nesciunt ad eligendi
                                ullam
                                minus. Architecto nisi repellendus libero molestiae porro?</p>
                            <a href="#">Voir plus <span><i class="fas fa-chevron-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-bottle">
                <button>Tout Voir</button>
            </div>
        </div>
    </main>

    <!-- FOOTER -->

    <footer>
        <?php include('parts/footer.php'); ?>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>

</html>