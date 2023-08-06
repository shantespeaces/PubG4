<?php

namespace Model;

use Base\Model;

class Client extends Model {
    protected $table = "clients_infolettre";

    public function ajouterClient($prenom, $nom, $courriel)
    {
        $sql = "INSERT INTO $this->table (prenom, nom, courriel) 
                VALUES (:prenom, :nom, :courriel)";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":courriel" => $courriel
        ]);
    }
}