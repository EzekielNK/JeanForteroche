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
            <title><?= $title ?? 'Jean Forteroche' ?></title>
            <link rel="shortcut icon" href="">
            <!-- Google Font -->
            <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
        <!-- FontAwesome -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
            <!-- Normalize css and our css -->
            <link rel="stylesheet" type="text/css" media="screen" href="css/normalize.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        </head>
        <body>

        <header id="container-header">
            <div id="logo">
                <img class="imgLogo" src="img/logo/logo_jf.png" alt="Logo de Jean Forteroche:
                Logo composait de deux lettres J et F en majuscule de couleur bleu-gris" />
            </div>
            <h2 class="title-jf">Jean Forteroche</h2>
            <h3 class="title-ae">Acteur et Écrivain</h3>
            <div id="login"><a class="connexion" href="#">Se connecter</a></div>
            <nav id="container-nav">
                <ul class="container-ul">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Biographie</a></li>
                    <li><a href="#">Catégories</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </header>

        <section id="main">
            <div class="home">
                <h1>La littérature, quand elle n'est pas un art, est au moins une profession libérale.</h1>
            </div>
            <div class="container">
                <?= $content ?>
            </div>
        </section>

        <footer>
            <div class="container-footer">
                <?php if (defined('DEBUG_TIME')) : ?>
                    Page générée en <?= round(1000 * (microtime(true) - DEBUG_TIME))?> ms
                <?php endif ?>
            </div>
            <!-- Tab Bar Mobile -->
            <div class="tab-bottom-bar">
                <a href="#" class="tab-menu-item tab-current"><i class="fas fa-home"></i></a>
                <a class="tab-nav-indicator"></a>
                <!--<a href="#" class="tab-menu-item"><i class="fas fa-book-reader"></i></a>-->
                <a href="#" class="tab-menu-item"><i class="fas fa-user-tie"></i></a>
                <a href="#" class="tab-menu-item"><i class="fas fa-at"></i></a>
                <a href="#" class="tab-menu-item"><i class="fas fa-list-alt"></i></a>
            </div>
        </footer>

        <script src="js/TabBar.js"></script>
        </body>
</html>
