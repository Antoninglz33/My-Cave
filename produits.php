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
        <?php include('parts/navbar.php'); ?>
    </header>

    <main>

        <div class="bg-produits">
            <div class="title-produits">
                <h1>Notre collection</h1>
            </div>
            <div class="trait-produits"></div>
            <div class="produits-cont">
                <div class="produits-grid">
                    <div class="img-produits">
                        <img src="./assets/img/block_nine.png" alt="img-block-nine">
                    </div>
                    <div class="text-cont">
                        <h2>Block Nine</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus provident odit eveniet
                            vero rem laborum quibusdam quos, quisquam quae iste et consequatur ratione autem voluptates
                            repellendus necessitatibus impedit ea distinctio.</p>
                        <a href="./page-produit.html">Voir le produit</a>
                    </div>
                </div>
            </div>

            <div class="produits-cont">
                <div class="produits-grid-white">
                    <div class="img-produits">
                        <img src="./assets/img/bodega_lurton.png" alt="img-bodega-lurton">
                    </div>
                    <div class="text-cont">
                        <h2>Bodega Lurton</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus provident odit eveniet
                            vero rem laborum quibusdam quos, quisquam quae iste et consequatur ratione autem voluptates
                            repellendus necessitatibus impedit ea distinctio.</p>
                        <a href="./page-produit.html">Voir le produit</a>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <div class="foot-cont">
            <ul>
                <li><a href="">Contact <span><i class="fas fa-chevron-right"></i></span></a></li>
                <li><a href="">Mention Légales <span><i class="fas fa-chevron-right"></i></span></a></li>
                <li>@2021 my cave antonin gonzalez</li>
            </ul>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>

</html>