<?php

namespace Controller;

use Base\Controller;
use Model\Client;

class ClientController extends Controller
{
   //CREER COMPTE UTILISATEUR
  

   
    public function ajouterClientEnregistrer()
    {
      $modele = new Client;
        // Validation des paramètres
        
        if (
            empty($_POST["prenom"]) ||
            empty($_POST["nom"]) ||
            empty($_POST["courriel"])
           
        ) {
            header("location: ajouter-client-enregistrer?infos_requises=1");

            exit();

            include("views/infolettre.view.php");
        }


        // Ajouter le client //envoyer info au model
        $modele = new Client;
        $succes = $modele->ajouterClient(
            $_POST["prenom"],
            $_POST["nom"],
            $_POST["courriel"],
        );

        // Redirection si échec
        if (!$succes) {
            header("location: ajouter-client-enregistrer?echec_ajout=1");
            exit();
        }

        // Redirection si succès
        header("location: index?succes_ajout=1");
        exit();
    }

}
