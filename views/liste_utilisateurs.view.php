<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("views/parts/head.inc.php"); ?>
    <title>Big Boss Only | liste utilisateurs</title>
</head>

<body>

    <?php include("views/parts/header_admin.inc.php"); ?>

    <section class="formulaire creation-compte">

        <form action="compte-enregistrer" method="POST">

            <?php include("views/parts/messages/index.inc.php"); ?>

            <h3>Création de compte</h3>

            <input type="text" name="prenom" placeholder="Prénom" autofocus>
            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="mot_de_passe" placeholder="Mot de passe">
            <input type="password" name="confirmer_mot_de_passe" placeholder="Confirmer le mot de passe">

            <div class="btn">
                <div class="cercle"> <span class="material-symbols-outlined">
                        arrow_right_alt
                    </span>
                </div>
                <button class="boutton" type="submit" value="Envoyer"> Créer </button>
            </div>
        </form>
    </section>


    <section class="liste-utilisateurs">


        <?php foreach ($utilisateurs as $utilisateur) : ?>

            <div class="un-utilisateur">

                <div class="conteneur">
                    <p class="titre">Prénom: </p>
                    <p> <?= $utilisateur->prenom ?>
                </div>

                <div class="conteneur">
                    <p class="titre">Nom: </p>
                    <p><?= $utilisateur->nom ?></p>
                </div>

                <div class="conteneur">
                    <p class="titre">Username: </p>
                    <p> <?= $utilisateur->username ?></p>
                </div>

                <div class="conteneur">
                    <p class="titre">Mot de passe: </p>
                    <p> *****</p>
                </div>

                <div class="conteneur">
                    <a href="supprimer-utilisateur?id=<?= $utilisateur->id ?>"><span class="material-icons">
                            delete_forever
                        </span>
                    </a>
                    <a href="modifier-utilisateur?id=<?= $utilisateur->id ?>"><span class="material-icons">
                            edit
                        </span>
                    </a>
                </div>
            </div>

        <?php endforeach; ?>
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