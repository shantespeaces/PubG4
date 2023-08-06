<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("views/parts/head.inc.php"); ?>
    <title>Modifier une Publication</title>
</head>

<body>
    <?php include("views/parts/header_admin.inc.php"); ?>

    <section class="formulaire modification plat">

        <form action="modification-enregistrer" method="POST">

            <div class="titre">Modifier un plat</div>

            <div class="categories">

                <label>
                    <?php include("views/parts/messages/index.inc.php"); ?>

                    <input type="hidden" name="id" value="<?= $publication->id ?>">

                    <p>Services</p>

                    <select name="service_id">

                        <?php foreach ($services as $service) : ?>
                            <option value="<?= $service->id ?>"><?= $service->titre ?>
                            </option>
                        <?php endforeach; ?>

                    </select><br>
                </label>

                <label>
                    <p>Sous-catégories</p>

                    <select name="categorie_nourriture_id" id="">

                        <?php foreach ($categories_nourriture as $categorie_nourriture) : ?>
                            <option value="<?= $categorie_nourriture->id ?>">
                                <?= $categorie_nourriture->titre ?>
                            </option>
                        <?php endforeach; ?>

                    </select><br>

                </label>
            </div>

            <div class="conteneur-input">
                
                <label>
                    <p>Titre </p>
                    <input type="text" name="titre" value="<?= $publication->titre  ?>" maxlength="35">
                </label>

                <label>
                    <p>Description du plat </p>
                    <textarea name="description" id="description" maxlength="160"> <?= $publication->description ?></textarea>
                </label>


                <label>
                    <p>Prix</p>
                    <input type="integer" name="prix" value="<?= $publication->prix  ?>">
                </label>

                <div class="btn">
                    <div class="cercle"> <span class="material-symbols-outlined">
                            arrow_right_alt
                        </span>
                    </div>
                    <button class="boutton" type="submit" value="Envoyer"> modifier </button>
                </div>
            </div>
        </form>
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