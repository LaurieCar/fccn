<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    
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
        <div class="page">
            <h1>Contact</h1>
            <p>
                Vous souhaitez plus de renseignements ? 
                N'hésitez pas à nous contacter
            </p>
            <p>
                Pour les demandes d'essai, référez-vous au formulaire sur la page <a class="lien" href="./demandeEssai.php">demande d'essai</a>
            </p>
        </div>
        

        <h3>Contactez-nous :</h3>
        <form action="./register.php" method="post">
            <?php
                    if(isset($_GET["error"])){
                        switch ($_GET["error"]) {
                            case 1:
                                echo "<div class='error-message'>Veuillez remplir tous les champs du formulaire</div>";
                                break;
                            case 2:
                                echo "<div class='error-message'>L'adresse mail est invalide</div>";
                                break;
                        
                            default:
                                # code...
                                break;
                        }
                    }
            ?>
            
            <label for="nom_contact">Saisir votre nom :</label>
            <input name="nom_contact" type="text" placeholder="Nom" required="required"/>
            <label for="prenom_contact">Saisir votre prénom :</label>
            <input name="prenom_contact" type="text" placeholder="Prénom" required="required"/>
            <label for="email_contact">Saisir votre email :</label>
            <input name="email_contact" type="email" placeholder="E-mail" required="required"/>
            <label for="telephone_contact">Saisir votre téléphone :</label>
            <input name="telephone_contact" type="tel" placeholder="Téléphone" required="required"/>
            <label for="message_contact" class="message" id="message">Saisir votre message :</label>
            <textarea name="message_contact" type="message" placeholder="Message" required="required"></textarea>
            <div class="button">
                <button id="button" type="submit" name="submit">Envoyer</button>
            </div>   
        </form>

        <div class="adresse">
            <p>FC CANAL NORD <br>
            13 chemin de Beldou <br>
            31150 LESPINASSE</p>
        </div>
        <div class="adresse">
            <p>fccanalnord@gmail.com<br>
            06.11.22.33.44</p>
        </div>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13719.27000460001!2d1.3744598833876194!3d43.708029399154015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aea6094d0a23bf%3A0x7367926641946b2e!2s11%20Chem.%20de%20Beldou%2C%2031150%20Lespinasse!5e0!3m2!1sfr!2sfr!4v1704995999563!5m2!1sfr!2sfr" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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