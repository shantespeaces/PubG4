<?php

namespace Controller;

use Base\Controller;
use Model\Publication;

class SiteController extends Controller
{
    public function index()
    {
        include("views/index.view.php");
    }

    public function menu_nourriture()
    {
        $modele_publication = new Publication;
        //Récuperer  tous les plats
        $publications = $modele_publication->tousLesPlats();
        

        include("views/menu_nourriture.view.php");
    }
    public function menu_drinks()
    {
        include("views/menu_drinks.view.php");
    }
}
