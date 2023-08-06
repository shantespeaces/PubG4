<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("views/parts/head.inc.php"); ?>
    <title>Modifier un Utilsateur</title>
</head>

<body>

    <?php include("views/parts/header_admin.inc.php"); ?>

    <section class="formulaire modification utilisateur">

        <form action="modification-utilisateur-enregistrer" method="POST">

            <div class="titre">Modifier un utilisateur</div>

            <div class="conteneur-modif-utilisateur">

                <label>
                    <?php include("views/parts/messages/index.inc.php"); ?>
                    <input type="hidden" name="id" value="<?= $utilisateur->id ?>">
                    <p>Prénom</p>
                    <input type="text" name="prenom" class="prenom" value="<?= $utilisateur->prenom  ?>">
                </label>

                <label>
                    <p>Nom</p>
                    <input type="text" name="nom" class="nom" value="<?= $utilisateur->nom  ?>">
                </label>

                <label>
                    <p>Username</p>
                    <input type="text" name="username" class="username" value="<?= $utilisateur->username ?>">
                </label>

                <label>
                    <p>Mot de passe</p>
                    <input type="password" name="mot_de_passe" class="password" value="<?= $utilisateur->mot_de_passe ?>">
                </label>

                <div class="btn">

                    <div class="cercle"> <span class="material-symbols-outlined">
                            arrow_right_alt
                        </span>
                    </div>

                    <button class="boutton" type="submit" value="Envoyer"> Créer </button>
                </div>
            </div>
        </form>
    </section>

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