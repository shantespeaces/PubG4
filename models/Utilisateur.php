<?php

namespace Model;

use Base\Model;

class Utilisateur extends Model {
    protected $table = "utilisateurs";

    /**
     * Undocumented function
     *
     * @param string $prenom
     * @param string $nom
     * @param string $mdp
     * @return void
     */
    public function ajouter(string $prenom, string $nom,  string $username, string $mot_de_passe) {
        $sql = "INSERT INTO $this->table 
                    (prenom, nom, username, mot_de_passe ) 
                VALUES 
                    (:prenom, :nom, :username, :mot_de_passe)";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":prenom" => $prenom,
            ":nom" => $nom,
            "username" => $username,
           
            // Encryption du mot de passe
            ":mot_de_passe" => password_hash($mot_de_passe, PASSWORD_DEFAULT),
        
        ]);

    }
     /**
     * Récupère un utilisateur, s'il existe, en fonction du courriel
     *
     * @param string $courriel
     * 
     * @return object|false
     */
    public function parUsername($username)
    {
        $sql = "SELECT id, mot_de_passe
                FROM $this->table
                WHERE username = :username";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([
            ":username" => $username
        ]);

        return $requete->fetch();
    }

    //modele qui retouren la liste dutilisateurs

    public function afficherListeUtilisateur(){
        $sql = "SELECT id, prenom, nom, username, mot_de_passe 
            FROM utilisateurs";

        $requete = $this->pdo()->prepare($sql);
        $requete->execute();
        
        return $requete->fetchAll();
    }

    //modifier utilisateur

    public function modifierUtilisateur($id, $prenom, $nom, $username, $mot_de_passe)
    {
        $sql = "UPDATE $this->table
                SET 
                    prenom = :prenom,
                    nom = :nom,
                    username = :username,
                    mot_de_passe = :mot_de_passe
                WHERE id = :id";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":id" => $id,
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":username" => $username,
            ":mot_de_passe" => $mot_de_passe,

             // Encryption du mot de passe
             //":mot_de_passe" => password_hash($mot_de_passe, PASSWORD_DEFAULT),
        ]);
    }
    //supprimer un utilisateur
     
     public function supprimer()
     {
 
         $id = $_GET['id'];
         $sql = "DELETE FROM $this->table 
                 WHERE id = :id";
 
         $requete = $this->pdo()->prepare($sql);
         return $requete->execute([":id" => $id]);
     }
}