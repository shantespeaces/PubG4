<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("views/parts/head.inc.php"); ?>

    <title>Accueil</title>

</head>

<body>
    <div id="app">
        <?php include("views/parts/header.inc.php"); ?>

        <div class="hero">
            <video src="public/video/pubG4_header_white.mp4" type="video/mp4" ref="videoRef" class="video" @mouseover="$event.target.play()" @mouseout="$event.target.pause()" loop muted>

            </video>

        </div>

        <div class="interface">

            <section class="intro">

                <h2>PUB G4</h2>
                <p>Depuis maintenant 20 ans, Pub G4 vous fait découvrir des plats de tout genre avec une touche raffinée que vous n’avez goutée nulle part ailleurs. Venez entre amis, pour une soirée romantique ou simplement pour vous laisser emporter par la force tranquille de notre pub raffiné. </p>
                <br>
                <p>Chaque visite chez Pub G4 est une invitation à savourer des moments précieux autour de délices culinaires et d'une ambiance élégante. Découvrez un voyage gustatif incomparable, où notre passion pour la gastronomie se mêle harmonieusement à votre plaisir de déguster des plats d'exception. Venez nous rejoindre et laissez notre pub raffiner votre expérience culinaire dans une atmosphère unique et mémorable. </p>

            </section>

            <?php include("views/parts/temoignage.inc.php"); ?>
        </div>

        <?php include("views/parts/infolettre.inc.php"); ?>

        <section class="services">

            <article>

                <video src="public/video/entrees.mp4" type="video/mp4" ref="videoRef" class="video" @mouseover="$event.target.play()" @mouseout="$event.target.pause()" loop muted>

                </video>

                <div class="conteneur_categorie">
                    <div class="service">
                        <h3>entrées</h3>
                        <a href="menu_nourriture #entrees"><span class="material-symbols-outlined">
                                arrow_right_alt
                            </span>
                        </a>
                    </div>
                    <p>grand choix de plats végé!</p>
                </div>
            </article>

            <article>
                <video src="public/video/plats_principaux.mp4" type="video/mp4" ref="videoRef" class="video" @mouseover="$event.target.play()" @mouseout="$event.target.pause()" loop muted>

                </video>

                <div class="conteneur_categorie">
                    <div class="service">
                        <h3>plats principaux</h3>
                        <a href="menu_nourriture #plats_principaux"><span class="material-symbols-outlined">
                                arrow_right_alt
                            </span>
                        </a>
                    </div>
                    <p>plusieurs choix à partager!</p>
                </div>
            </article>

            <article>
                <video src="public/video/desserts.mp4" type="video/mp4" ref="videoRef" class="video" @mouseover="$event.target.play()" @mouseout="$event.target.pause()" loop muted>

                </video>

                <div class="conteneur_categorie">
                    <div class="service">
                        <h3>desserts</h3>
                        <a href="menu_nourriture #desserts"><span class="material-symbols-outlined">
                                arrow_right_alt
                            </span>
                        </a>
                    </div>
                    <p>chocolat & caramel!</p>
                </div>
            </article>

            <article>
                <video src="public/video/drinks.mp4" type="video/mp4" ref="videoRef" class="video" @mouseover="$event.target.play()" @mouseout="$event.target.pause()" loop muted>

                </video>

                <div class="conteneur_categorie">
                    <div class="service">
                        <h3>breuvages</h3>
                        <a href="menu_drinks #menu_drinks"><span class="material-symbols-outlined">
                                arrow_right_alt
                            </span>
                        </a>
                    </div>
                    <p>vous avez soif?</p>
                </div>
            </article>
        </section>
    </div>
    <?php include("views/parts/footer.inc.php"); ?>

    <script src="public/js/main.js" type="module"></script>

</body>

</html>