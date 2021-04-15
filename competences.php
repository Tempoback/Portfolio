<!DOCTYPE html>
<html lang="fr">

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

            <!-- Carte 1 -->
            <div class="flip-card">

                <!-- Carte 1 retournante -->
                <div class="flip-card-inner">

                    <!-- Face de la carte -->
                    <div class="flip-card-front">
                        <img src="./Assets/systeme.png" alt="Serveur">
                        <div class="titreCompetence">Système</div>
                    </div>

                    <!-- Dos de la carte -->
                    <div class="flip-card-back">
                        <ul>
                            <li>Déploiement de serveurs</li>
                            <li>Masterisation</li>
                            <li>Déploiement et Configuration clients</li>
                            <li>Déploiement de systèmes d'exploitations</li>
                            <li>Veille technologique</li>
                        </ul>

                    </div>
                </div>
            </div>

            <!-- Carte 5 -->
            <div class="flip-card">

                <!-- Carte 4 retournante -->
                <div class="flip-card-inner">

                    <!-- Face de la carte -->
                    <div class="flip-card-front">
                        <img src="./Assets/suiteOffice.png" alt="Office 365">
                        <div class="titreCompetence">Suite Office</div>
                    </div>

                    <!-- Dos de la carte -->
                    <div class="flip-card-back">
                        <ul>
                            <li>Word</li>
                            <li>Excel/VBA</li>
                            <li>PowerPoint</li>
                            <li>Outlook</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne 2 -->
        <div>

            <!-- Carte 2 -->
            <div class="flip-card">

                <!-- Carte 2 retournante -->
                <div class="flip-card-inner">

                    <!-- Face de la carte -->
                    <div class="flip-card-front">
                        <img src="./Assets/reseau.jpg" alt="Fibre Optique">
                        <div class="titreCompetence">Réseau</div>
                    </div>

                    <!-- Dos de la carte -->
                    <div class="flip-card-back">
                        <ul>
                            <li>Brassage de prises</li>
                            <li></li>
                            <li>Test1</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Carte 6 -->
            <div class="flip-card">

                <!-- Carte 6 retournante -->
                <div class=" flip-card-inner">

                    <!-- Face de la carte -->
                    <div class="flip-card-front">
                        <img src="./Assets/windows.png" alt="Windows">
                        <div class="titreCompetence">Windows</div>
                    </div>

                    <!-- Dos de la carte -->
                    <div class="flip-card-back">
                        <ul>
                            <li>Test1</li>
                            <li>Test1</li>
                            <li>Test1</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <!-- Colonne 3 -->
        <div>

            <!-- Carte 3 -->
            <div class="flip-card">

                <!-- Carte 3 retournante -->
                <div class="flip-card-inner">

                    <!-- Face de la carte -->
                    <div class="flip-card-front">
                        <img src="./Assets/management.jpg" alt="Équipe gestion de projet">
                        <div class="titreCompetence">Gestion de Projet</div>
                    </div>

                    <!-- Dos de la carte -->
                    <div class="flip-card-back">
                        <ul>
                            <li>Test1</li>
                            <li>Test1</li>
                            <li>Test1</li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Carte 7 -->
            <div class="flip-card">

                <!-- Carte 7 retournante -->
                <div class="flip-card-inner">

                    <!-- Face de la carte -->
                    <div class="flip-card-front">
                        <img src="./Assets/linux.png" alt="Linux">
                        <div class="titreCompetence">Linux</div>
                    </div>

                    <!-- Dos de la carte -->
                    <div class="flip-card-back">
                        <ul>
                            <li>Test1</li>
                            <li>Test1</li>
                            <li>Test1</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <!-- Colonne 4 -->
        <div>

            <!-- Carte 4 -->
            <div class="flip-card">

                <!-- Carte 4 retournante -->
                <div class="flip-card-inner">

                    <!-- Face de la carte -->
                    <div class="flip-card-front">
                        <img src="./Assets/anglais.jpg" alt="Drapeau UK">
                        <div class="titreCompetence">Anglais</div>
                    </div>

                    <!-- Dos de la carte -->
                    <div class="flip-card-back">
                        <ul>
                            <li>Test1</li>
                            <li>Test1</li>
                            <li>Test1</li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Carte 8 -->
            <div class="flip-card">

                <!-- Carte 8 retournante -->
                <div class="flip-card-inner">

                    <!-- Face de la carte -->
                    <div class="flip-card-front">
                        <img src="./Assets/HTML-CSS.jpg" alt="HTML/CSS">
                        <div class="titreCompetence">HTML/CSS</div>
                    </div>

                    <!-- Dos de la carte -->
                    <div class="flip-card-back">
                        <ul>
                            <li>Test1</li>
                            <li>Test1</li>
                            <li>Test1</li>
                        </ul>
                    </div>

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