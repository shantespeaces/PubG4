<section class="infolettre">

    <div class="conteneur-infolettre">

        <div class="image">
            <img src="public/img/infolettre.jpg" alt="image burgers infolettre">
        </div>

        <div class="formulaire infolettre">

            <div class="texte">
                <h3>ABONNEZ-VOUS À NOTRE INFOLETTRE</h3>
                <p>Inscrivez-vous avec les médias sociaux ou l'adresse courriel</p>
            </div>

            <div class="medias infolettre">

                <a href="https://www.facebook.com/">
                    <img src="public/img/facebook.png" alt="facebook" width="25px" height="25px">
                </a>

                <a href="https://www.instagram.com/">
                    <img src="public/img/instagram.png" alt="instagram" width="25px" height="25px">
                </a>

                <a href="https://twitter.com/">
                    <img src="public/img/twitter.png" alt="twitter" width="25px" height="25px">
                </a>

            </div>


            <form action="ajouter-client-enregistrer" class="inscription" method="POST">
                <label>
                    <p>Prénom</p>
                    <input type="text" name="prenom" placeholder=" Entrez votre prénom">
                </label>
                <label>
                    <p>Nom</p>
                    <input type="text" name="nom" placeholder=" Entrez votre nom">
                </label>
                <label>
                    <p>Adresse e-mail</p>
                    <input type="email" name="courriel" placeholder=" ex: sarah@mail.com">
                </label>
                <br>
                <div class="btn">
                    <div class="cercle"> <span class="material-symbols-outlined">
                            arrow_right_alt
                        </span>
                    </div>
                    <button class="boutton" type="submit" value="Envoyer"> S'inscrire </button>
                </div>
            </form>
        </div>
    </div>
</section>