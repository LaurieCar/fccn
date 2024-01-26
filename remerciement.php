<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci</title>

    <link rel="stylesheet" href="CSS/contact.css">
    <link rel="stylesheet" href="CSS/header.css">
    <script src="./script.js" async></script>

    <!--liens police d'écriture-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Quicksand:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <header id="header">
        
        <div id="logo">
            <img src="images/logo.png" alt="logo" height="80vh" width="80vw">
        </div>

        <div class="burger">          
            <button id="btnopen" class="menu-label">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 64 59" fill="none">
                    <path d="M61 3.10204H3" stroke="#F5F5F5" stroke-width="5.9421" stroke-linecap="round"/>
                    <path d="M61 29.2917H3" stroke="#F5F5F5" stroke-width="5.9421" stroke-linecap="round"/>
                    <path d="M61 55.4814H3" stroke="#F5F5F5" stroke-width="5.9421" stroke-linecap="round"/>
                </svg>
            </button>
        
            <nav id="menu-nav">
                <button id="btnClose">
                    <img src="./images/btnclose.svg" alt="fermer" width="20" height="20">
                </button>
                <div id="flex">
                <div class="club">
                    <ul>
                        <li class="menu-item">LE CLUB</li>
                        <li class="menu-item"><a class="menu-link" href="#">A propos</a></li>
                        <li class="menu-item"><a class="menu-link" href="#">Comité directeur</a></li>
                        <li class="menu-item"><a class="menu-link" href="#">Nos partenaires</a></li>
                        <li class="menu-item"><a class="menu-link" href="#">Devenir partenaire</a></li>
                    </ul>
                </div>
                <div class="equipes">
                    <ul>
                        <li class="menu-item">LES EQUIPES</li>
                        <li class="menu-item"><a class="menu-link" href="#">Ecole de Football</a></li>
                        <li class="menu-item"><a class="menu-link" href="#">Pré-Formation</a></li>
                        <li class="menu-item"><a class="menu-link" href="#">Séniors</a></li>
                        <li class="menu-item"><a class="menu-link" href="#">Féminines</a></li>
                    </ul>
                </div>
                <div class="infos">
                    <ul>
                        <li class="menu-item">INFOS PRATIQUES</li>
                        <li class="menu-item"><a class="menu-link" href="#">Tarifs des licences</a></li>
                        <li class="menu-item"><a class="menu-link" href="#">Planning des entraînements</a></li>
                        <li class="menu-item"><a class="menu-link" href="./contact.php">Contact</a></li>
                        <li class="menu-item"><a class="menu-link" href="./demandeEssai.html">Demande d'essai</a></li>
                    </ul>
                </div>
                </div>
        
            </nav>        
        </div>
    

        <a id="menu" href="./index.html">ACCUEIL</a>

        <a id="actualites" href="./index.html">ACTUALITES</a>
        <a id="boutique" href="https://app.grinta.eu/fc-canal-nord-1/products?collection=official">BOUTIQUE</a>
       
        <h2>Suivez-nous</h2>
            
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
    </header>
    
    <section class="banniere">
        <h1 class="banniere">SITE OFFICIEL</h1>
        <img src="images/logo.png" alt="logo">
        <h1 class="banniere">FC CANAL NORD</h1>
    </section>

    <main>
        <h1>Merci !</h1>

        <p>
            Votre message a bien été envoyé.
        </p>
        <p>
            N'hésitez pas à consulter notre site pour toutes informations complémentaires.
        </p>

        <div class="photogroupe">
            <img  class="photogroupe" src="images/merci.svg" alt="photo groupe">
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
            <li><a href="#">Contact</a></li>
            <li><a href="#">Mentions légales</a></li>
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