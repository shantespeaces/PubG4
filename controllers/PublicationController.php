<?php

namespace Controller;

use Base\Controller;
use Model\Publication;
use Model\Services;
use Model\Nourriture;
use Model\Utilisateur;

class PublicationController extends Controller
{

    public function index()
    {


        $modele_publication = new Publication;

        //Récuperer toutes les catégories
        $services = $modele_publication->categoriesServices();
        $categories_nourriture = $modele_publication->categoriesNourriture();

        //Récuperer  tous les plats
        $publications = $modele_publication->tousLesPlats();

        include("views/menu-administration.view.php");
    }

    //AJOUTER
    public function formulaireAjouter()
    {
        $modele_publication = new Publication;

        //Récuperer toutes les catégories

        $categories_nourriture = $modele_publication->categoriesNourriture();

        $service = (new Services)->parId($_GET["id"]);

        include("views/formulaire-ajout-publication.view.php");
    }

    /**
     * Traite les informations de l'ajout d'un plat
     */

    public function ajoutEnregistrer()
    {

        // Validation des paramètres
        if (
            empty($_POST["titre"]) ||
            empty($_POST["description"]) ||
            empty($_POST["prix"]) ||
            empty($_POST["service_id"]) ||
            empty($_POST["categorie_nourriture_id"])
        ) {
            header("location: ajouter-publication?infos_requises=1");

            exit();
            include("views/formulaire-ajout-publication.view.php");
        }


        // Ajouter la publication du plat //envoyer info au model
        $modele = new Publication;
        $succes = $modele->ajouter(
            $_POST["titre"],
            $_POST["description"],
            $_POST["prix"],
            $_POST["service_id"],
            $_POST["categorie_nourriture_id"],

        );

        // Redirection si échec
        if (!$succes) {
            header("location: ajouter-publication?echec_ajout=1");
            exit();
        }

        // Redirection si succès
        header("location: menu-administration?succes_ajout=1");
        exit();
    }

    //MODIFIER
    public function formulaireModification()
    {

        $modele_publication = new Publication;

        //Récuperer toutes les catégories
        $services = $modele_publication->categoriesServices();
        $categories_nourriture = $modele_publication->categoriesNourriture();

        if (empty($_GET["id"])) {
            header("location: modifier-publication?publication_inexistant=1");
            exit();
        }

        $publication = (new Publication)->parId($_GET["id"]);

        include("views/formulaire-modification-publication.view.php");
    }



    public function modificationEnregistrer()
    {

        if (
            empty($_POST["titre"]) ||
            empty($_POST["description"]) ||
            empty($_POST["prix"]) ||
            empty($_POST["service_id"]) ||
            empty($_POST["categorie_nourriture_id"])
        ) {
            header("location: modification-enregistrer?=infos_manquantes=1");

            exit();
        }

        $succes = (new Publication)->modifier(
            $_POST["id"],
            $_POST["titre"],
            $_POST["description"],
            $_POST["prix"],
            $_POST["service_id"],
            $_POST["categorie_nourriture_id"],
            null
        );

        // Redirection si échec
        if (!$succes) {
            header("location: menu-administration?echec_modification=1");
            exit();
        }

        // Redirection si succès
        header("location: menu-administration?succes_modification=1");
        exit();

        include("views/formulaire-ajout-publication.view.php");
    }

    //SUPPRIMER
    public function supprimer()
    {
        $modele_supprimer = new Publication;
        $succes = $modele_supprimer->supprimer($_GET["id"]);

        // Redirection si échec
        if (!$succes) {
            header("location: menu-administration?echec_supprimer=1");
            exit();
        }

        // Redirection si succès
        header("location: menu-administration?succes_supprimer=1");
        exit();
    }
}
