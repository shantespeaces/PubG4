<?php

$routes = [
    // route => [controller, méthode]

    //================================SITE==========================//

    //page accueil
    "index" => ["SiteController", "index"],

    //page menu_nourriture
    "menu_nourriture" => ["SiteController", "menu_nourriture"],

    //page menu_drinks
    "menu_drinks" => ["SiteController", "menu_drinks"],



    //=======================ADMIN UTILISATEUR================================//

    //CONNEXION (lien admin brings me to connection form)
    "connexion" => ["UtilisateurController", "connexion"],

    //traitement de la connexion (quand on soumet le formulaire)
    "connecter" => ["UtilisateurController", "connecter"],

    // Traitement de la déconnexion
    "deconnecter" => ["UtilisateurController", "deconnecter"],


    // COMPTE UTILISATEUR

    // Formulaire de création de compte //page administration?
    "compte-creer" => ["UtilisateurController", "creer"],

    // Traitement de la création d'un compte
    "compte-enregistrer" => ["UtilisateurController", "enregistrer"],

    //afficher la page utilisateurs
    "liste-utilisateurs" => ["UtilisateurController", "index"],

    //modifier un utilisateur
    // Page des modicfications lien modifier qui mene au formulaire modifier
    "modifier-utilisateur" => ["UtilisateurController", "formulaireModificationUtilisateur"],

    // Traitement de la modification d'un utilisateur
    "modification-utilisateur-enregistrer" => ["UtilisateurController", "modificationEnregistrerUtilisateur"],


    //supprimer un utilisateur
    "supprimer-utilisateur" => ["UtilisateurController", "supprimer"],
   



//=======================ADMIN PUBLICATION================================//

    //AJOUTER DES PUBLICATIONS AU MENU

    //page menu admin 
    "menu-administration" => ["PublicationController", "index"],

    // formulaire ajouter /lien ajouter qui mene au formulaire ajout(par boutton + sur la page admin)
    "ajouter-publication" => ["PublicationController", "formulaireAjouter"],

    // Traitement de la création d'une publication
    "ajout-enregistrer" => ["PublicationController", "ajoutEnregistrer"],

    //MODIFIER DES PUBLICATIONS AU MENU

    // Page des publications - lien modifier qui mene au formulaire modifier
    "modifier-publication" => ["PublicationController", "formulaireModification"],

    // Traitement de la modification d'une publication
    "modification-enregistrer" => ["PublicationController", "modificationEnregistrer"],

    //SUPPRIMER DES PUBLICATIONS AU MENU
    //lien supprimer qui qui va etre rediriger a la page menu_admin
    "supprimer-publication" => ["PublicationController", "supprimer"],

    //=====================INFOLETTRE - CLIENTS===========================//

    //"infolettre" => ["ClientController", "index"],


  
    "ajouter-client-enregistrer" => ["ClientController", "ajouterClientEnregistrer"],

];
