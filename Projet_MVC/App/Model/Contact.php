<?php
namespace App\Model;
use App\Utils\BddConnect;
class Contact extends BddConnect{
    // attributs
    private ?int $id_contact;
    private ?string $nom_contact;
    private ?string $prenom_contact;
    private ?string $email_contact;
    private ?string $telephone_contact;
    private ?string $message_contact;

    // getters et setters
    public function getId():?int{
        return $this->id_contact;
    }
    public function setId(int $id_contact): void{
        $this->id_contact = $id_contact;
    }
    public function getNom():?string{
        return $this->nom_contact;
    }
    public function setNom(string $nom_contact):void{
        $this->nom_contact = $nom_contact;
    }
    public function getPrenom():?string{
        return $this->prenom_contact;
    }
    public function setPrenom(string $prenom_contact):void{
        $this->prenom_contact = $prenom_contact;
    }
    public function getEmail():?string{
        return $this->email_contact;
    }
    public function setEmail(string $email_contact):void{
        $this->email_contact = $email_contact;
    }
    public function getTelephone():?string{
        return $this->telephone_contact;
    }
    public function setTelephone(string $telephone_contact):void{
        $this->telephone_contact = $telephone_contact;
    }
    public function getMessage():?string{
        return $this->message_contact;
    }
    public function setMessage(string $message_contact):void{
        $this->message_contact = $message_contact;
    }
}



