<?php
namespace App\Model;
use App\Utils\BddConnect;

class Carrousel_image extends BddConnect{
    // Attributs
    private ?int $id_carrousel_image;
    private ?string $nom_image;
    private ?int $ordre_image;
    private ?string $url_image;

    // getters et setters 
    public function getId():?int{
        return $this->id_carrousel_image;
    }
    public function setId(int $id_carrousel_image):void{
        $this->id_carrousel_image = $id_carrousel_image;
    }
    public function getNom(): ?string{
        return $this->nom_image;
    }
    public function setNom(string $nom_image):void{
        $this->nom_image = $nom_image;
    }
    public function getOrdre():?int{
        return $this->ordre_image;
    }
    public function setOrdre(int $ordre_image):void{
        $this->ordre_image = $ordre_image;
    }
    public function getUrl(): ?string{
        return $this->url_image;
    }
    public function setUrl(string $url_image):void{
        $this->url_image = $url_image;
    }
}