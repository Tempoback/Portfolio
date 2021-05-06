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
    <link rel="stylesheet" href="./CSS/3_histoire/histoire.css" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    <title>Mon histoire</title>
</head>

<body style="background-image: url(./Assets/Bg1.jpg)">
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

        <button type="button" class="slick-prev">Previous</button>
        <div class="slider">

            <div class="container Bg2">
                <div class="para">
                    <div>
                        <h3>Bonjour, voici ma présentation :</h3>
                        <p>
                            Je m'appelle <b>Paul TOUVEREY</b>, j'ai 21 ans, et je suis actuellement en formation GMSI au CESI de Reims.
                            Je suis né dans les Ardennes, plus particulièrement à Charleville-Mézières.
                        </p>
                    </div>
                    <figure>
                        <img src="./Assets/Ardennes.jpg" alt="">
                        <figcaption>Statue de Dardennor, chevalier légendaire des Ardennes</figcaption>
                    </figure>
                </div>
                <div class="para2">
                    <figure>
                        <img src="./Assets/Bazin.jpg" alt="">
                        <figcaption>Lycée Bazin</figcaption>
                    </figure>
                    <p>
                        J'ai fait un BAC Scientifique spécialité Sciences de l'ingénieur, que j'ai obtenu au Lycée Bazin. <br>
                        J'ai pu y découvrir de la mécanique, de la PAO (Programmation Assistée par Ordinateur), de l'électronique et de l'informatique.
                    </p>
                </div>
            </div>

            <!-- <div class="container Bg2">
                <div class="para">
                    <div>
                        <p>
                        <h3>Mes langues parlées :</h3> <br>
                        </p>
                    </div>
                    <figure>
                        <img src="./Assets/Ardennes.jpg" alt="">
                        <figcaption>Statue de Dardennor</figcaption>
                    </figure>
                </div>
                <div class="para2">
                    <figure>
                        <img src="./Assets/Bazin.jpg" alt="">
                        <figcaption>Lycée Bazin</figcaption>
                    </figure>
                    <p>
                        J'ai fait un BAC Scientifique spécialité Sciences de l'ingénieur, que j'ai obtenu au Lycée Bazin. <br>
                        J'ai pu y découvrir de la mécanique, de la PAO (Programmation Assistée par Ordinateur), de l'électronique et de l'informatique.
                    </p>
                </div>
            </div> -->


            <!-- <div class="container Bg2">
                <div class="para">
                    <div>
                        <p>
                        <h3>es :</h3> <br>
                        </p>
                    </div>
                    <figure>
                        <img src="./Assets/Ardennes.jpg" alt="">
                        <figcaption>Statue de Dardennor</figcaption>
                    </figure>
                </div>
                <div class="para2">
                    <figure>
                        <img src="./Assets/Bazin.jpg" alt="">
                        <figcaption>Lycée Bazin</figcaption>
                    </figure>
                    <p>
                        J'ai fait un BAC Scientifique spécialité Sciences de l'ingénieur, que j'ai obtenu au Lycée Bazin. <br>
                        J'ai pu y découvrir de la mécanique, de la PAO (Programmation Assistée par Ordinateur), de l'électronique et de l'informatique.
                    </p>
                </div>
            </div>
        </div> -->

            <div class="container Bg2">
                <div class="para">
                    <div>
                        <h3>Mes centres d'intérets :</h3>
                        <p>
                            J'ai beaucoup de centres d'intérets, comme par exemple l'informatique, les jeux vidéos et les séries. <br>
                            Mes licences de jeux vidéos préférées sont <span>Zelda, Professeur Layton, et Tomb Raider.</span>
                        </p>
                    </div>
                    <figure>
                        <img src="./Assets/setup.jpg" alt="">
                        <figcaption>Setup Gaming</figcaption>
                    </figure>
                </div>
                <div class="para2">
                    <figure>
                        <img src="./Assets/trone.jpg" alt="">
                        <figcaption>Le trône de fer, but ultime de Game of Thrones</figcaption>
                    </figure>
                    <p>
                        Je suis un grand fan de plusieurs univers cinématographiques, tels que <span>Game Of Thrones, le Marvel Cinematic Universe (MCU) et Doctor Who.</span>
                    </p>
                </div>
            </div>

        </div>
        <button type="button" class="slick-next">Next</button>



        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="./vendor/slick/slick.min.js"></script>
        <script type="text/javascript" src="./JS/arrow.js"></script>

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

</html>