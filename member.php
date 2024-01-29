<?php
// FORMULAIRE MEMBRE

    // Import de la connexion à la BDD
    include './connectBdd.php';

    // Test si le bouton est cliqué
    if(isset($_POST["submit"])){
        // Test si tous les champs sont remplis
        if(!empty($_POST["nom_membre"]) AND !empty($_POST["prenom_membre"]) AND !empty($_POST["email_membre"]) AND !empty($_POST["telephone_membre"]) AND !empty($_POST["datenaissance_membre"]) AND !empty($_POST["nom_poste"]) AND !empty($_POST["message_membre"])){
            // nettoyer les entrées utilisateurs
            $nom = cleanInput($_POST["nom_membre"]);
            $prenom = cleanInput($_POST["prenom_membre"]);
            $email = cleanInput($_POST["email_membre"]);
            $telephone = cleanInput($_POST["telephone_membre"]);
            $date = cleanInput($_POST["datenaissance_membre"]);
            $poste = cleanInput($_POST["nom_poste"]);
            $message = cleanInput($_POST["message_membre"]);
            // Ajouter le membre en BDD
            ajouterMembre($bdd,$nom,$prenom,$email,$telephone,$date,$poste,$message);
            // Afficher page de remerciement 
            header("Location:./remerciement.php");
        }
        else{
            echo "veuillez remplir tous les champs du formulaire";
        }
    }

    // fonction pour ajouter un membre à la BDD
    function ajouterMembre($bdd,string $nom,string $prenom,string $email, int $telephone, int $date, string $poste, string $message): void{
        try {
            // requête SQL
            $requete = $bdd->prepare('INSERT INTO membre(nom_membre,prenom_membre,email_membre,telephone_membre,datenaissance_membre,nom_poste,message_membre) VALUE (?,?,?,?,?,?,?)');
            $requete->bindParam(1,$nom,PDO::PARAM_STR);
            $requete->bindParam(2,$prenom,PDO::PARAM_STR);
            $requete->bindParam(3,$email,PDO::PARAM_STR);
            $requete->bindParam(4,$telephone,PDO::PARAM_INT);
            $requete->bindParam(5,$date,PDO::PARAM_INT);
            $requete->bindParam(6,$poste,PDO::PARAM_STR);
            $requete->bindParam(7,$message,PDO::PARAM_STR);
            $requete->execute();
        } 
        // Récupération des erreurs 
        catch (\Exception $e) {
            // Affichafe de l'erreur
            die("Error : ".$e->getMessage());
        }
    }

    // function pour nettoyer les entrées des formulaires
    function cleanInput(?string $value):?string{
        return htmlspecialchars(strip_tags(trim($value)),ENT_NOQUOTES);
    }
?>
