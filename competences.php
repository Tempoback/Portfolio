<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./vendor/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./vendor/slick/slick-theme.css" />

    <link rel="stylesheet" href="./CSS/Utils/base.css" />
    <link rel="stylesheet" href="./CSS/Utils/font.css" />
    <link rel="stylesheet" href="./CSS/Utils/test.css" />
    <link rel="stylesheet" href="./CSS/0_Responsive/responsive.css" />
    <link rel="stylesheet" href="./CSS/1_style/style.css" />
    <link rel="stylesheet" href="./CSS/5_competences/competences.css" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    <title>Mes Compétences</title>
</head>

<body style="background-color:rgb(169,169,169)">
    <header id="top">
        <nav>
            <span>
                <a href="index" class="title">
                    <img src="../Assets/Logo.png" alt="Logo Paul TOUVEREY" />
                    <div class="PadL20">Paul TOUVEREY</div>
                </a>
            </span>
            <div class="container">
                <span>
                    <a href="./histoire"> Mon histoire </a>
                </span>
                <span>
                    <a href="./experience"> Mon expérience </a>
                </span>
                <span>
                    <a href="./competences"> Mes compétences </a>
                </span>
                <span>
                    <a href="./contact"> Contact </a>
                </span>
            </div>
            <div id="burger-nav">
                <img src="../Assets/burger.png" alt="Burger Nav" />
            </div>
        </nav>
        <nav class="NoBg">
            <li>
                <ul>
                    <a href="./histoire"> Mon Histoire </a>
                </ul>
                <ul>
                    <a href="./experience"> Mes formations </a>
                </ul>
                <ul>
                    <a href="./competences"> Mes compétences </a>
                </ul>
                <ul>
                    <a href="./contact"> Contact </a>
                </ul>
            </li>
        </nav>
    </header>

    <main>
        <!-- Colonne 1 -->
        <div>
            <div>
                <img src="./Assets/systeme.png" alt="Serveur">
                <div class="titreC">Système</div>
            </div>
            <div>
                <img src="./Assets/serveur.png" alt="Serveur">
                <div class="titreC">5</div>
            </div>
        </div>

        <!-- Colonne 2 -->
        <div>
            <div>
                <img src="./Assets/reseau.jpg" alt="Fibre Optique">
                <div class="titreC">Réseau</div>
            </div>
            <div>
                <img src="./Assets/serveur.png" alt="Serveur">
                <div class="titreC">6</div>
            </div>
        </div>

        <!-- Colonne 3 -->
        <div>
            <div>
                <img src="./Assets/management.jpg" alt="Équipe gestion de projet">
                <div class="titreC">Gestion de Projet</div>
            </div>
            <div>
                <img src="./Assets/serveur.png" alt="Serveur">
                <div class="titreC">7</div>
            </div>
        </div>

        <!-- Colonne 4 -->
        <div>
            <div>
                <img src="./Assets/anglais.jpg" alt="Drapeau UK">
                <div class="titreC">Anglais</div>
            </div>
            <div>
                <img src="./Assets/serveur.png" alt="Serveur">
                <div class="titreC">8</div>
            </div>
        </div>
    </main>

    <footer>
        <nav class="container">
            <div>Contact:</div>
            <div>
                <a href="https://www.linkedin.com/in/paul-touverey-136729180/" target="_blank">
                    <img src="./Assets/linkedin.png" alt="" />
                </a>
            </div>
            <div>
                <a href="./contact">
                    <img src="./Assets/phone.png" alt="" class="logo" />
                </a>
            </div>
            <div>
                <a href="./contact">
                    <img src="./Assets/en.png" alt="" class="logo" />
                </a>
            </div>
            <div>
                <a href="">
                    <span class="Tgris70"> &copyTempoBack </span>
                </a>
            </div>
        </nav>
    </footer>
</body>