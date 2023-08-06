<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("views/parts/head.inc.php"); ?>
    <title>Menu Drinks</title>
</head>

<body>
    <div id="app">
        <?php include("views/parts/header.inc.php"); ?>

        <div class="interface menu">

            <h2>menu breuvages</h2>
            <div class="scrolling-text-conteneur">

                <p class="scrolling-text">pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme -</p>

            </div>

            <section class="drinks">


                <h3>boissons alcoolisées</h3>
                <hr>
                <h4>vins</h4>

                <div class="grid-container">
                    <div class="grid-item">chardonnay</div>
                    <div class="grid-item">Un Chardonnay raffiné et équilibré, aux arômes délicats de fruits blancs et à la finale fraîche et élégante, une expérience gustative exquise.</div>
                    <div class="grid-item">40.99</div>
                    <div class="grid-item"> <span class="material-icons-outlined">
                            stars
                        </span>
                    </div>
                </div>
            </section>

            <section class="partage">

                <hr>
                <h4>bières</h4>

                <div class="grid-container">
                    <div class="grid-item">golden ale</div>
                    <div class="grid-item">Bière de microbrasserie artisanale, brassée avec passion et créativité, offrant des saveurs uniques et une expérience de dégustation authentique.</div>
                    <div class="grid-item">16.49</div>
                    <div class="grid-item"></div>
                </div>
            </section>

            <?php include("views/parts/temoignage.inc.php"); ?>

        </div>
    </div>
    <?php include("views/parts/footer.inc.php"); ?>

    <script src="public/js/main.js" type="module"></script>
</body>

</html>