<?php

// FORMULAIRE CONTACT

    // Import de la connexion à la BDD
    include './connectBdd.php';

    // Test si le bouton est cliqué
    if(isset($_POST["submit"])){
        //Test si tous les champs sont remplis
        if(!empty($_POST["nom_contact"]) AND !empty($_POST["prenom_contact"]) AND !empty($_POST["email_contact"]) AND !empty($_POST["telephone_contact"]) AND !empty($_POST["message_contact"])){
            // nettoyer les entrées du formulaire
            $nom = cleanInput($_POST["nom_contact"]);
            $prenom = cleanInput($_POST["prenom_contact"]);
            $email = cleanInput($_POST["email_contact"]); 
            $telephone = cleanInput($_POST["telephone_contact"]);
            $message = cleanInput($_POST["message_contact"]);
            // Ajouter le contact en BDD
            ajouterContact($bdd,$nom,$prenom,$email,$telephone,$message);
            // Afficher un message
            header("Location:./remerciement.php");
        }
        else{
            echo "Veuillez remplir tous les champs du formulaire";
        }
    }

    // fonction pour ajouter un contact à la BDD
    function ajouterContact($bdd,string $nom,string $prenom,string $email,string $telephone,string $message): void{
        try {
            // requete SQL
            $requete = $bdd->prepare('INSERT INTO contact(nom_contact,prenom_contact,email_contact,telephone_contact,message_contact) VALUE(?,?,?,?,?)');
            $requete->bindParam(1,$nom,PDO::PARAM_STR);
            $requete->bindParam(2,$prenom,PDO::PARAM_STR);
            $requete->bindParam(3,$email,PDO::PARAM_STR);
            $requete->bindParam(4,$telephone,PDO::PARAM_STR);
            $requete->bindParam(5,$message,PDO::PARAM_STR);
            $requete->execute();
        } 
        // Bloc pour récupérer les erreurs
        catch (\Exception $e) {
            // Affichage de l'erreur
            die("Error : ".$e->getMessage());
        }
    }

    // function pour nettoyer les input du formulaire
    function cleanInput(?string $value):?string{
        return htmlspecialchars(strip_tags(trim($value)),ENT_NOQUOTES);
    }
?>
