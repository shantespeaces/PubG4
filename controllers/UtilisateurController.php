<?php

namespace Controller;

use Base\Controller;
use Model\Utilisateur;
use Model\Publication;


class UtilisateurController extends Controller
{

    
//AFFICHER LIST UTILISATEURS
public function index(){

    $modele_utilisateur = new Utilisateur;

     //Récuperer la liste dutilisateurs
    $utilisateurs = $modele_utilisateur->afficherListeUtilisateur();
    include("views/liste_utilisateurs.view.php");
}


    //CREER COMPTE UTILISATEUR -- AJOUTER UN UTILISATEUR
    public function creer()
    {
        $modele_publication = new Publication;

        //Récuperer toutes les catégories
        $services = $modele_publication->categoriesServices();
        $categories_nourriture = $modele_publication->categoriesNourriture();

        //Récuperer  tous les plats
        $publications = $modele_publication->tousLesPlats();

        //recupere utilisateur 1 - Da Big Boss
        $modele_utilisateur = new Utilisateur;
$utilisateur = $modele_utilisateur-> afficherListeUtilisateur();
        
        include("views/menu-administration.view.php");
    }

    public function enregistrer()
    {
        // Validation
       
        if (
            empty($_POST["prenom"]) ||
            empty($_POST["nom"]) ||
            empty($_POST["username"]) ||
            empty($_POST["mot_de_passe"]) ||
            empty($_POST["confirmer_mot_de_passe"])
        ) {
            header("location: liste-utilisateurs?infos_absentes=1");
            exit();
        }

        if ($_POST["mot_de_passe"] != $_POST["confirmer_mot_de_passe"]) {
            header("location: liste-utilisateurs?mot_de_passe_incorrect=1");
            exit();
        }



        // Envoyer les infos au modèle
        $modele = new Utilisateur;
        $succes = $modele->ajouter(
            $_POST["prenom"],
            $_POST["nom"],
            $_POST["username"],
            $_POST["mot_de_passe"]
            
        );


        // Rediriger si succès
        if ($succes) {
            header("location: liste-utilisateurs?succes_creation_compte=1");
            exit();
        }

        // Redirection si échec
        header("location: liste-utilisateurs?echec_creation_compte=1");
        exit();
    }

    //MODIFIER UN UTILISATEUR

    public function formulaireModificationUtilisateur()
    {
       
        $modele_utilisateur = new Utilisateur;
    
        //Récuperer toutes les utilisateurs
        $utilisateurs = $modele_utilisateur->afficherListeUtilisateur();
        
    
        if (empty($_GET["id"])) {
            header("location: modifier-utilisateur?utilisateur_inexistant=1");
            exit();
        }
    
        $utilisateur = (new Utilisateur)->parId($_GET["id"]);
      
    
        include("views/formulaire-modification-utilisateur.view.php");
    }
    
    
    
    public function modificationEnregistrerUtilisateur()
    {
        if (
            empty($_POST["prenom"]) ||
            empty($_POST["nom"]) ||
            empty($_POST["username"]) ||
            empty($_POST["mot_de_passe"]) 
            
        ) {
            header("location: modification-utilisateur-enregistrer?=infos_manquantes=1");
    
            exit();
        }
    
        $succes = (new Utilisateur)->modifierUtilisateur(
            $_POST["id"],
            $_POST["prenom"],
            $_POST["nom"],
            $_POST["username"],
            $_POST["mot_de_passe"],
            null
        );
    
        // Redirection si échec
        if (!$succes) {
            header("location: liste-utilisateurs?echec_modifier=1");
            exit();
        }
    
        // Redirection si succès
        header("location: liste-utilisateurs?succes_modifier=1");
        exit();
    
        include("views/formulaire-modification-utilisateur.view.php");
    }
    
    
    //SUPPRIMER UN UTILISATEUR
    public function supprimer(){
        $modele_supprimer = new Utilisateur;
        $succes = $modele_supprimer->supprimer($_GET["id"]);
    
        // Redirection si échec
        if (!$succes) {
            header("location: liste-utilisateurs?echec_supprimer=1");
            exit();
        }
    
        // Redirection si succès
        header("location: liste-utilisateurs?succes_supprimer=1");
        exit();
    }
    
    //CONNEXION
    public function connexion()
    {
        include("views/connexion.view.php");
    }
    //CONNEXION
    /**
     * Valide et connecte l'utilisateur
     */
    public function connecter()
    {

        // Valider les paramètres POST
        if (
            empty($_POST["username"]) ||
            empty($_POST["mot_de_passe"])
        ) {
            header("location: connexion?infos_requises=1");
            exit();
        }

        // Récupérer l'utilisateur
        $modele = new Utilisateur;
        $utilisateur = $modele->parUsername($_POST["username"]);

        // Valider que l'utilisateur existe ET que son mot de passe est valide
        if (!$utilisateur || !password_verify($_POST["mot_de_passe"], $utilisateur->mot_de_passe)) {
            header("location: connexion?infos_invalides=1");
            exit();
        }

        // Créer la session
        $_SESSION["utilisateur_id"] = $utilisateur->id;
        $_SESSION["est_connecte"] = true;

        // Rediriger
        header("location: menu-administration?succes_connexion=1");
        exit();
        include("views/menu-administration.view.php");
    }

    //DECONNEXION
    public function deconnecter()
    {
        session_destroy();
        header("location: index?succes_deconnexion=1");
        exit();
        include("views/index.view.php");
    }
    
}
