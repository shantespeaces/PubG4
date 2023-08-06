<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("views/parts/head.inc.php"); ?>

    <title>Menu nourriture</title>
</head>

<body>
    <div id="app">
        <?php include("views/parts/header.inc.php"); ?>

        <section class="menu">

            <h2>menu nourriture</h2>

            <div class="scrolling-text-conteneur">
                <p class="scrolling-text">pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme - pub g4 - st-jérôme -</p>
            </div>
            
            <div class="interface">

                <section class="entrees">

                    <h3 id="entrees">entrées</h3>
                    <hr>
                    <section class="soupe-salade">
                        <h4>soupes & salades</h4>

                        <?php foreach ($publications as $publication) : ?>
                            <?php if ($publication->categorie_nourriture_id == 1) : ?>

                                <div class="grid-container">
                                    <div class="grid-item start"><?= $publication->titre ?></div>
                                    <div class="grid-item middle"><?= $publication->description ?></div>
                                    <div class="grid-item end"><?= $publication->prix ?></div>
                                </div>

                            <?php endif; ?>
                        <?php endforeach; ?>

                    </section>

                    <section class="partage">

                        <h4>à partager </h4>

                        <?php foreach ($publications as $publication) : ?>
                            <?php if ($publication->categorie_nourriture_id == 2) : ?>

                                <div class="grid-container">
                                    <div class="grid-item start"><?= $publication->titre ?></div>
                                    <div class="grid-item middle"><?= $publication->description ?></div>
                                    <div class="grid-item end"><?= $publication->prix ?></div>
                                </div>

                            <?php endif; ?>
                        <?php endforeach; ?>

                    </section>

                </section>

                <section class="plats-principaux">


                    <h3 id="plats_principaux">plats principaux</h3>
                    <hr>
                    <section class="case-croute">

                        <h4>casse-croûte</h4>

                        <?php foreach ($publications as $publication) : ?>
                            <?php if ($publication->categorie_nourriture_id == 6) : ?>

                                <div class="grid-container">
                                    <div class="grid-item start"><?= $publication->titre ?></div>
                                    <div class="grid-item middle"><?= $publication->description ?></div>
                                    <div class="grid-item end"><?= $publication->prix ?></div>
                                </div>

                            <?php endif; ?>
                        <?php endforeach; ?>

                    </section>

                    <section class="palets-rafines">

                        <h4>palets raffinés </h4>

                        <?php foreach ($publications as $publication) : ?>
                            <?php if ($publication->categorie_nourriture_id == 7) : ?>

                                <div class="grid-container">
                                    <div class="grid-item start"><?= $publication->titre ?></div>
                                    <div class="grid-item middle"><?= $publication->description ?></div>
                                    <div class="grid-item end"><?= $publication->prix ?></div>
                                </div>

                            <?php endif; ?>
                        <?php endforeach; ?>

                    </section>
                </section>

                <section class="desserts">

                    <h3 id="desserts">desserts</h3>
                    <hr>
                    <section class="choco-caramel">

                        <h4>chocolat</h4>

                        <?php foreach ($publications as $publication) : ?>
                            <?php if ($publication->categorie_nourriture_id == 8) : ?>

                                <div class="grid-container">
                                    <div class="grid-item start"><?= $publication->titre ?></div>
                                    <div class="grid-item middle"><?= $publication->description ?></div>
                                    <div class="grid-item end"><?= $publication->prix ?></div>
                                </div>

                            <?php endif; ?>
                        <?php endforeach; ?>

                    </section>

                    <section class="choco-caramel">
                        <h4>caramel</h4>

                        <?php foreach ($publications as $publication) : ?>
                            <?php if ($publication->categorie_nourriture_id == 9) : ?>

                                <div class="grid-container">
                                    <div class="grid-item start"><?= $publication->titre ?></div>
                                    <div class="grid-item middle"><?= $publication->description ?></div>
                                    <div class="grid-item end"><?= $publication->prix ?></div>
                                </div>

                            <?php endif; ?>
                        <?php endforeach; ?>

                    </section>

                </section>

                <?php include("views/parts/temoignage.inc.php"); ?>

            </div>
        </section>
    </div>

    <?php include("views/parts/footer.inc.php"); ?>
    <script src="public/js/main.js" type="module"></script>

</body>

</html>