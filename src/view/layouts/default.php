<!DOCTYPE html>
<html lang="fr">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <!-- Open Graph / Facebook -->
            <meta property="og:type" content="website" />
            <meta property="og:url" content="" />
            <meta property="og:title" content="" />
            <meta property="og:description"
                  content="" />
            <meta property="og:image" content="" />
            <!-- Twitter -->
            <meta property="twitter:card" content="" />
            <meta property="twitter:url" content="" />
            <meta property="twitter:title" content="" />
            <meta property="twitter:description"
                  content="" />
            <meta property="twitter:image" content="" />
            <title>Jean Forteroche</title>
            <link rel="shortcut icon" href="">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/normalize.css" />
            <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        </head>
        <body>

        <header id="container-header">
            <div id="logo">
                <img class="imgLogo" src="img/logo/logoT.png" alt="Logo de Jean Forteroche:
                Logo composait de deux lettres J et F en majuscule de couleur bleu-gris" />
            </div>
            <h2 class="title-jf">Jean Forteroche</h2>
            <h3 class="title-ae">Acteur et Écrivain</h3>
            <div id="login"><a class="connexion" href="#">Se connecter</a></div>
            <nav id="container-nav">
                <ul class="container-ul">
                    <li>Accueil</li>
                    <li>Article</li>
                    <li>Biographie</li>
                    <li>Contact</li>
                </ul>
            </nav>
        </header>

        <div class="container">
            <?= $content ?>
        </div>

        <!-- Tab Bar Mobile -->
        <div class="tab-bottom-bar">
            <a href="#" class="tab-menu-item tab-current"><i class="fas fa-home"></i></a>
            <a class="tab-nav-indicator"></a>
            <a href="#" class="tab-menu-item"><i class="fas fa-book-reader"></i></a>
            <a href="#" class="tab-menu-item"><i class="fas fa-user-tie"></i></a>
            <a href="#" class="tab-menu-item"><i class="fas fa-at"></i></a>
        </div>

        <footer>
            <div class="container-footer">
                <?php if (defined('DEBUG_TIME')) : ?>
                    Page générée en <?= round(1000 * (microtime(true) - DEBUG_TIME))?> ms
                <?php endif ?>
            </div>
        </footer>

        <script src="js/TabBar.js"></script>
        </body>
</html>