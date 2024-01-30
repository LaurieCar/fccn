<?php
namespace App\Model;
use App\Utils\BddConnect;

class Sponsor extends BddConnect{
    // Attributs
    private ?int $id_sponsor;
    private ?string $nom_sponsor;
    private ?string $prenom_sponsor;
    private ?string $email_sponsor;
    private ?string $telephone_sponsor;
    private ?string $raisonsociale_sponsor;
    private ?string $message_sponsor;

    // Getters et setters
    public function getId():?int{
        return $this->id_sponsor;
    }
    public function setId(int $id_sponsor):void{
        $this->id_sponsor = $id_sponsor;
    }
    public function getNom(): ?string{
        return $this->nom_sponsor;
    }
    public function setNom(string $nom_sponsor):void{
        $this->nom_sponsor = $nom_sponsor;
    }
    public function getPrenom(): ?string{
        return $this->prenom_sponsor;
    }
    public function setPrenom(string $prenom_sponsor):void{
        $this->prenom_sponsor = $prenom_sponsor;
    }
    public function getEmail(): ?string{
        return $this->email_sponsor;
    }
    public function setEmail(string $email_sponsor):void{
        $this->email_sponsor = $email_sponsor;
    }
    public function getTelephone(): ?string{
        return $this->telephone_sponsor;
    }
    public function setTelephone(string $telephone_sponsor):void{
        $this->telephone_sponsor = $telephone_sponsor;
    }
    public function getRaisonsociale(): ?string{
        return $this->raisonsociale_sponsor;
    }
    public function setRaisonsociale(string $raisonsociale_sponsor):void{
        $this->raisonsociale_sponsor = $raisonsociale_sponsor;
    }
    public function getMessage(): ?string{
        return $this->message_sponsor;
    }
    public function setMessage(string $message_sponsor):void{
        $this->message_sponsor = $message_sponsor;
    }
}

