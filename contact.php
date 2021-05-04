<?php
if (isset($_POST['submit'])) {

    $nom = htmlspecialchars($_POST['nom']);
    $mail = htmlspecialchars($_POST['email']);
    $texte = htmlspecialchars($_POST['texte']);
    $header = "MIME-Version: 1.0\r\n";
    $header = 'From: $nom <contact.tempoback.com>' . "\n";
    $header = 'Content-Type:text/html; charset="utf-8"' . "\n";
    $header = 'Content-Transfert-Encoding: 8bit';

    $message = 'Vous avez reçu un mail de ' . $mail . "\r" . 'Message : ' . $texte . "";
    mail("contact.tempoback@gmail.com", "Mail de " . $mail, $message, $header);
}



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="./vendor/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./vendor/slick/slick-theme.css" />
    <link rel="stylesheet" href="./CSS/Utils/base.css" />
    <link rel="stylesheet" href="./CSS/Utils/font.css" />
    <link rel="stylesheet" href="./CSS/Utils/test.css" />
    <link rel="stylesheet" href="./CSS/0_Responsive/responsive.css">
    <link rel="stylesheet" href="./CSS/1_style/style.css" />
    <link rel="stylesheet" href="./CSS/6_contact/contact.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />


    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>

    </script>

    <title>Contactez moi !</title>
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
        <div class="container Bg2">
            <h3 class="Tsize42 MargB30">
                Restons en contact
            </h3>
            <div class="dFlex spaceA MargB40 Pad20 nom">
                <div class="Tsize24 dFlex center">
                    <img src="./Assets/en.png" alt="" /> &ensp;: contact.tempoback@gmail.com
                </div>
                <div class="Tsize24 dFlex center">
                    <img src="./Assets/phone.png" alt="" /> &nbsp;: 06.83.76.62.45
                </div>
            </div>

            <form action="" method="post" class="dFlex column center" id="contact">
                <div class="dFlex spaceB nom">
                    <input type="text" name="nom" id="nom" placeholder="Votre nom" required />
                    <input type="email" name="email" id="email" placeholder="Votre mail" required />
                </div>
                <div class="dFlex center Pad20">
                    <textarea id="texte" name="texte" placeholder="Votre message"></textarea>
                </div>
                <div class="dFlex center Pad50">
                    <input type="submit" value="Envoyer" class="button2" id="submit-test-form"></input>
                </div>

                <div>
                    <div class="g-recaptcha MargT20 MargB30" id="google_recaptcha">
                    </div>
                </div>
            </form>
    </main>

    <footer>
        <nav class=" container">
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

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./vendor/slick/slick.min.js"></script>
<script src="./JS/arrow.js"></script>
<script src="./JS/menu.js"></script>


<script>
    var onloadCallback = function() {
        grecaptcha.render('google_recaptcha', {
            sitekey: '6Le8xMUaAAAAAMY9i3DdQnXiqk6wGyW65i1eE7OS',
        });

        document
            .getElementById('submit-test-form').onclick = function(e) {
                var rcres = grecaptcha.getResponse();
                if (rcres.length) {
                    grecaptcha.reset();
                    console.log('Form Submitted!', 'success');
                } else {
                    e.preventDefault();
                    console.log('Please verify reCAPTCHA', 'error');
                }
            };
    };
</script>




</html>