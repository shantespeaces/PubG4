<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("views/parts/head.inc.php"); ?>
    <title>Menu Admin</title>
</head>

<body>

    <header>

        <div class="header-admin">

            <div class="titre">

                <h1>PUB G4</h1>
                <p>administration</p>

                <?php if ($_SESSION["utilisateur_id"] == "23") : ?>
                    <a href="liste-utilisateurs">Top Boss Only</a>
                <?php endif; ?>

            </div>

            <hr>

            <div class="logo">
                <img src="public/img/logo.png" alt="logo pub g4" width="150" height="100">
            </div>
        </div>

    </header>

    <div class="interface">

        <section class="menu admin">

            <h2>menu nourriture</h2>

            <section class="entrees">

                <h3>entrées
                    <a href="ajouter-publication?id=<?= $services[0]->id ?>">
                        <span class="material-icons">
                            add
                        </span>
                    </a>
                </h3>

                <hr>

                <section class="soupe-salade">
                    <h4>soupes & salades </h4>

                    <?php foreach ($publications as $publication) : ?>
                        <?php if ($publication->categorie_nourriture_id == 1) : ?>

                            <div class="grid-container">
                                <div class="grid-item start"><?= $publication->titre ?></div>
                                <div class="grid-item middle"><?= $publication->description ?></div>
                                <div class="grid-item end"><?= $publication->prix ?></div>
                                <div class="grid-item symboles">
                                    <a href="supprimer-publication?id=<?= $publication->id ?>">
                                        <span class="material-icons">
                                            delete_forever
                                        </span>
                                    </a>

                                    <a href="modifier-publication?id=<?= $publication->id ?>">
                                        <span class="material-icons">
                                            edit
                                        </span>
                                    </a>
                                </div>
                            </div>

                        <?php endif; ?>
                    <?php endforeach; ?>

                </section>

                <section class="partage">
                    <h4>à partager</h4>

                    <?php foreach ($publications as $publication) : ?>
                        <?php if ($publication->categorie_nourriture_id == 2) : ?>

                            <div class="grid-container">
                                <div class="grid-item start"><?= $publication->titre ?></div>
                                <div class="grid-item middle"><?= $publication->description ?></div>
                                <div class="grid-item end"><?= $publication->prix ?></div>
                                <div class="grid-item symboles">

                                    <a href="supprimer-publication?id=<?= $publication->id ?>">
                                        <span class="material-icons">
                                            delete_forever
                                        </span>
                                    </a>

                                    <a href="modifier-publication?id=<?= $publication->id ?>">
                                        <span class="material-icons">
                                            edit
                                        </span>
                                    </a>
                                </div>
                            </div>

                        <?php endif; ?>
                    <?php endforeach; ?>

                </section>

            </section>


            <section class="plats-principaux">

                <h3>plats principaux<a href="ajouter-publication?id=<?= $services[1]->id ?>">
                        <span class="material-icons">
                            add
                        </span>
                    </a>
                </h3>

                <hr>

                <section class="casse-croute">
                    <h4>casse-croûte</h4>

                    <?php foreach ($publications as $publication) : ?>
                        <?php if ($publication->categorie_nourriture_id == 6) : ?>

                            <div class="grid-container">
                                <div class="grid-item start"><?= $publication->titre ?></div>
                                <div class="grid-item middle"><?= $publication->description ?></div>
                                <div class="grid-item end"><?= $publication->prix ?></div>
                                <div class="grid-item symboles">
                                    <a href="supprimer-publication?id=<?= $publication->id ?>">
                                        <span class="material-icons">
                                            delete_forever
                                        </span>
                                    </a>
                                    <a href="modifier-publication?id=<?= $publication->id ?>">
                                        <span class="material-icons">
                                            edit
                                        </span>
                                    </a>
                                </div>
                            </div>

                        <?php endif; ?>
                    <?php endforeach; ?>

                </section>

                <section class="palets-rafines">
                    <h4>palets rafinés</h4>

                    <?php foreach ($publications as $publication) : ?>
                        <?php if ($publication->categorie_nourriture_id == 7) : ?>

                            <div class="grid-container">
                                <div class="grid-item start"><?= $publication->titre ?></div>
                                <div class="grid-item middle"><?= $publication->description ?></div>
                                <div class="grid-item end"><?= $publication->prix ?></div>
                                <div class="grid-item symboles">
                                    <a href="supprimer-publication?id=<?= $publication->id ?>">
                                        <span class="material-icons">
                                            delete_forever
                                        </span>
                                    </a>
                                    <a href="modifier-publication?id=<?= $publication->id ?>">
                                        <span class="material-icons">
                                            edit
                                        </span>
                                    </a>
                                </div>
                            </div>

                        <?php endif; ?>
                    <?php endforeach; ?>

                </section>

            </section>

            <section class="desserts">

                <h3>desserts<a href="ajouter-publication?id=<?= $services[2]->id ?>"><span class="material-icons">
                            add
                        </span></a></h3>
                <hr>
                <section class="choco-caramel">
                    <h4>chocolat</h4>

                    <?php foreach ($publications as $publication) : ?>
                        <?php if ($publication->categorie_nourriture_id == 8) : ?>

                            <div class="grid-container">
                                <div class="grid-item start"><?= $publication->titre ?></div>
                                <div class="grid-item middle"><?= $publication->description ?></div>
                                <div class="grid-item end"><?= $publication->prix ?></div>
                                <div class="grid-item symboles">
                                    <a href="supprimer-publication?id=<?= $publication->id ?>">
                                        <span class="material-icons">
                                            delete_forever
                                        </span>
                                    </a>
                                    <a href="modifier-publication?id=<?= $publication->id ?>">
                                        <span class="material-icons">
                                            edit
                                        </span>
                                    </a>
                                </div>
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
                                <div class="grid-item symboles">
                                    <a href="supprimer-publication?id=<?= $publication->id ?>">
                                        <span class="material-icons">
                                            delete_forever
                                        </span>
                                    </a>
                                    <a href="modifier-publication?id=<?= $publication->id ?>">
                                        <span class="material-icons">
                                            edit
                                        </span>
                                    </a>
                                </div>
                            </div>

                        <?php endif; ?>
                    <?php endforeach; ?>

                </section>

            </section>
        </section>
    </div>

    <div class="conteneur-deconnexion">

        <div class="btn">
            <div class="cercle"> <span class="material-symbols-outlined">
                    arrow_right_alt
                </span>
            </div>
            <button class="boutton deconnexion"> <a href="deconnecter">Déconnexion</a></button>
        </div>
    </div>

</body>

</html>