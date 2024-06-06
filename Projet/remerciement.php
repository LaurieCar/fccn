<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci</title>

    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <script src="./script.js" async></script>

    <!--liens police d'écriture-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Quicksand:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="./index.html"><img class="logo" src="images/dessinLogo.svg" alt="photo logo" height="100vh" width="100vw"></a>
            <nav>
                <div class="toggle">
                    <i class="fa-solid fa-bars ouvrir"></i>
                    <i class="fa-solid fa-xmark fermer"></i>
                </div>

                <ul class="menu">
                    <li class="menu-deroulant">LE CLUB &ensp;<i class="fa-solid fa-chevron-down"></i>
                        <ul class="sous-menu">
                            <li><a href="#">A propos</a></li>
                            <li><a href="#">Comité Directeur</a></li>
                            <li><a href="#">Nos partenaires</a></li>
                            <li><a href="#">Devenir partenaire</a></li>
                        </ul>
                    </li>
                    <li class="menu-deroulant">LES EQUIPES &ensp;<i class="fa-solid fa-chevron-down"></i>
                        <ul class="sous-menu">
                            <li><a href="#">Ecole de foot</a></li>
                            <li><a href="#">Pré-formation</a></li>
                            <li><a href="#">Séniors</a></li>
                            <li><a href="#">Féminines</a></li>
                        </ul>
                    </li>
                    <li class="menu-deroulant">INFOS PRATIQUES &ensp;<i class="fa-solid fa-chevron-down"></i>
                        <ul class="sous-menu">
                            <li><a href="#">Tarifs des licences</a></li>
                            <li><a href="#">Planning des entraînements</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                            <li><a href="./demandeEssai.php">Demande d'essai</a></li>
                        </ul>
                    </li>
                    <li class="menu-deroulant"><a href="https://app.grinta.eu/fc-canal-nord/genders/new">LA BOUTIQUE</a></li>
                </ul>

            </nav>
            <div class="socialMedia">
                <a href="https://www.facebook.com/people/Football-Club-Canal-Nord/100057223128364/"><img src="images/fb.svg" alt="facebook"></a>
                <a href="https://www.instagram.com/fc_canalnord/"><img src="images/instagram.svg" alt="instagram"></a>
                <a href="https://www.linkedin.com/company/footballclubcanalnord"><img src="images/linkedin.svg" alt="linkedin"></a>
            </div>
    </header>
    
    <section class="banniere">
        <h1 class="banniere">SITE OFFICIEL</h1>
        <img src="images/logo.png" alt="logo">
        <h1 class="banniere">FC CANAL NORD</h1>
    </section>

    <main>
        <h1 class="merci">Merci !</h1>

        <p>
            Votre message a bien été envoyé.
        </p>
        <p>
            N'hésitez pas à consulter notre site pour toutes informations complémentaires.
        </p>

        <div class="retour">
            <i class="fa-solid fa-arrow-right"></i>
            <a href="./index.html">Retour à l'accueil</a>
        </div>
    
        <div class="photogroupe">   
            <img  class="photogroupe" src="images/merci.svg" alt="photo de l'école de foot">
        </div>
       
    </main>

    <section id="sponsor">
        <div class="sponsor">
            <img class="img" src="images/sponsor.png" alt="logo sponsor">
        </div>
        <div class="sponsor">
            <img class="img" src="images/sponsor2.png" alt="logo sponsor">
        </div>
        <div class="sponsor">
            <img class="img" src="images/sponsor3.png" alt="logo sponsor">
        </div>
        
    </section> 

    <footer id="footer">
        <ul class="footer">
            <li><a href="./contact.php">Contact</a></li>
            <li><a href="#">Mentions légales</a></li>
        </ul>
        <ul class="footer">
            <li><a href="#">Documents officiels</a></li>
            <li><a href="#">Gestion des cookies</a></li>
        </ul>
        <div class="socialMedia">
                <!--icone facebook-->
                <a href="https://www.facebook.com/people/Football-Club-Canal-Nord/100057223128364/"><img src="./images/fb.svg" alt="logofb" class="facebook">
                </a>
                
                <!--icone instagram-->
                <a href="https://www.instagram.com/fc_canalnord/"><img src="./images/instagram.svg" alt="logoinsta" class="instagram">
                </a>
                <!--icone linkedin-->
                <a href="https://www.linkedin.com/company/footballclubcanalnord/about/"><img src="./images/linkedin.svg" alt="logolinkedin" class="linkedin">
                </a>
            </div>              
    </footer>
</body>
</html>