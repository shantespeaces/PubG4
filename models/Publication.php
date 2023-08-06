<?php

namespace Model;

use Base\Model;

class Publication extends Model
{
    protected $table = "menu_nourriture";

    /**
     * Ajoute dùne publication
     *
     */
    public function ajouter($titre, $description, $prix, $service_id, $categorie_nourriture_id)
    {
        $sql = "INSERT INTO $this->table (titre, description, prix, service_id, categorie_nourriture_id) 
                VALUES (:titre, :description, :prix, :service_id, :categorie_nourriture_id)";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":titre" => $titre,
            ":description" => $description,
            ":prix" => $prix,
            ":service_id" => $service_id,
            ":categorie_nourriture_id" => $categorie_nourriture_id,

        ]);
    }

    //affiche le nouveau plat


    public function tousLesPlats()
    {
        $sql = "SELECT id, titre, description, prix, service_id, categorie_nourriture_id
              FROM menu_nourriture";


        $requete = $this->pdo()->prepare($sql);

        $requete->execute();


        return $requete->fetchAll();
    }

    // creer methode qui retourne toute les categories

    public function categoriesServices()
    {
        $sql = "SELECT id, titre 
            FROM services";

        $requete = $this->pdo()->prepare($sql);
        $requete->execute();
        
        return $requete->fetchAll();
    }

    public function categoriesNourriture()
    {
        $sql = "SELECT id, titre 
            FROM categories_nourriture";

        $requete = $this->pdo()->prepare($sql);
        $requete->execute();
        return $requete->fetchAll();
    }

    public function modifier($id, $titre, $description, $prix, $service_id, $categorie_nourriture_id)
    {
        $sql = "UPDATE $this->table
                SET 
                    titre = :titre,
                    description = :description,
                    prix = :prix,
                    service_id = :service_id,
                    categorie_nourriture_id = :categorie_nourriture_id
                WHERE id = :id";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":id" => $id,
            ":titre" => $titre,
            ":description" => $description,
            ":prix" => $prix,
            ":service_id" => $service_id,
            ":categorie_nourriture_id" => $categorie_nourriture_id,
        ]);
    }

    //supprimer une publication
    public function supprimer()
    {

        $id = $_GET['id'];
        $sql = "DELETE FROM $this->table 
                WHERE id = :id";

        $requete = $this->pdo()->prepare($sql);
        return $requete->execute([":id" => $id]);
    }
}
