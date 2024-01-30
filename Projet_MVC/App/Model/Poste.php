<?php
namespace App\Model;
use App\Utils\BddConnect;

class Poste extends BddConnect{
    // Attributs
    private ?int $id_poste;
    private ?string $nom_poste;

    // Getters et setters
    public function getId():?int{
        return $this->id_poste;
    }
    public function setId(int $id_poste):void{
        $this->id_poste = $id_poste;
    }
    public function getNom():?string{
        return $this->nom_poste;
    }
    public function setNom(string $nom_poste):void{
        $this->nom_poste = $nom_poste;
    }
}

