<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cave</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/css/page-produit.css">
</head>

<body>

    <header>
        <!-- Navbar bootstrap -->
        <?php include('parts/navbar.php'); ?>
    </header>


    <main>

        <div class="bg-produit">
            <div class="title-produit">
                <h1>Block Nine</h1>
            </div>
            <div class="grid-bouteille">
                <div class="txt-left">
                    <h2>California</h2>
                    <h2>Pinot Noir</h2>
                </div>
                <div class="img-center">
                    <img src="./assets/img/block_nine.png" alt="img-block-nine">
                </div>
                <div class="txt-right">
                    <h2>2010</h2>
                </div>
            </div>
            <div class="p-produit">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, laudantium. Id, sequi ea iure provident
                architecto illum assumenda est expedita. Pariatur consectetur aut et hic saepe mollitia dolorem
                quibusdam, officia cum dolor fugit veritatis culpa assumenda odio harum eos eius facere? Minus,
                molestias molestiae. Velit ullam laudantium corporis quaerat deleniti.
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