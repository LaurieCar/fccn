<?php
namespace App\Model;
use App\Utils\BddConnect;
use App\Model\Poste;
class Membre extends BddConnect{
    // Attributs
    private ?int $id_membre;
    private ?string $nom_membre;
    private ?string $prenom_membre;
    private ?string $email_membre;
    private ?string $telephone_membre;
    private ?string $datenaissance_membre;
    private ?string $message_membre;
    private Poste $nom_poste;
    
    // getters and setters;
    public function getId():?int{
        return $this->id_membre;
    }
    public function setId(int $id_membre):void{
        $this->id_membre = $id_membre;
    }
    public function getNom():?string{
        return $this->nom_membre;
    }
    public function setNom(string $nom_membre):void{
        $this->nom_membre = $nom_membre;
    }
    public function getPrenom():?string{
        return $this->prenom_membre;
    }
    public function setPrenom(string $prenom_membre):void{
        $this->prenom_membre = $prenom_membre;
    }
    public function getEmail():?string{
        return $this->email_membre;
    }
    public function setEmail(string $email_membre):void{
        $this->email_membre = $email_membre;
    }
    public function getTelephone():?string{
        return $this->telephone_membre;
    }
    public function setTelephone(string $telephone_membre):void{
        $this->telephone_membre = $telephone_membre;
    }
    public function getDatenaissance():?string{
        return $this->datenaissance_membre;
    }
    public function setDatenaissance(string $datenaissance_membre):void{
        $this->datenaissance_membre = $datenaissance_membre;
    }
    public function getPoste():?Poste{
        return $this->nom_poste;
    }
    public function setPoste(Poste $nom_poste):void{
        $this->nom_poste = $nom_poste;
    }
}

