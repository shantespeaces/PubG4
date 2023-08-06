<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("views/parts/head.inc.php"); ?>
    <title>Ajouter une publication</title>
</head>

<body>

    <?php include("views/parts/header_admin.inc.php"); ?>

    <section class="formulaire ajout">

        <form action="ajout-enregistrer" method="POST">

            <?php include("views/parts/messages/index.inc.php"); ?>

            <div class="titre">Ajouter un plat</div>

            <div class="categories">
                <label>
                    <p class="titre"><?= $service->titre ?> </p>
                        <input type="hidden" name="service_id" value="<?= $service->id ?>">
                </label>

                <label>
                    <p>Sous-catégories</p>

                    <select name="categorie_nourriture_id">

                        <?php foreach ($categories_nourriture as $categorie_nourriture) : ?>
                            <option value="<?= $categorie_nourriture->id ?>  selected id==categorie_id">
                                <?= $categorie_nourriture->titre ?>
                            </option>
                        <?php endforeach; ?>

                    </select><br>

                </label>
            </div>

            <div class="plat">
                <label>
                    <p>Titre</p>
                    <input type="text" name="titre" class="titre" value="" maxlength="35">
                </label>

                <label>
                    <p>Description du plat </p>
                    <textarea name="description" class="description" maxlength="160"></textarea>
                </label>

                <label>
                    <p>Prix</p>
                    <input type="integer" name="prix" class="prix" value="">
                </label>

                <div class="btn">
                    <div class="cercle"> <span class="material-symbols-outlined">
                            arrow_right_alt
                        </span>
                    </div>
                    <button class="boutton" type="submit" value="Envoyer"> Créer </button>
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