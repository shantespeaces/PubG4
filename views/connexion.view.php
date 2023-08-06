<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include("views/parts/head.inc.php"); ?>
    <title>Connexion</title>
</head>

<body>

<?php include("views/parts/header_admin.inc.php"); ?>

    <main class="page-connexion">
        
        <section class="formulaire connexion">

            <form action="connecter" method="POST">
                <div class="titre"><p>Connectez-vous</p> </div>
                <?php include("views/parts/messages/index.inc.php"); ?>
                
                <input type="text" name="username" placeholder="username" autofocus>
                <input type="password" name="mot_de_passe" placeholder="Mot de passe">

                <div class="btn">
                    <div class="cercle"> <span class="material-symbols-outlined">
                            arrow_right_alt
                        </span>
                    </div>
                    <button class="boutton" type="submit" value="Envoyer"> Connexion </button>
                </div>

            </form>

        </section>
    </main>

</body>

</html>