<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corps Humains - Race for Water</title>
    <link rel="stylesheet" href="public/css/style.css">
    <script src="public/js/script.js" defer></script>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-table">
            <div class="header-left">
                <h1>Race for Water</h1>
            </div>
            <div class="header-right">
                <nav>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="#ocean">L'océan</a></li>
                        <li><a href="#podcast">Podcast</a></li>
                        <li><a href="corps_humains.php" class="active">Corps Humains</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main>
        <section id="corps-humains-introduction">
            <h2>Découvrons le corps humain</h2>
            <p>Le corps humain est une merveille de la nature, composé de différents systèmes et organes qui travaillent ensemble pour assurer notre survie. Dans cette section, vous allez découvrir des informations fascinantes sur le corps humain et comment il fonctionne en harmonie.</p>
        </section>

        <!-- Logo Container -->
        <div class="logo-container" style="position: relative; height: 400px; width: 100%;">
            <img id="logo" src="assets/logo_lyreco.png" alt="Logo Lyreco" style="position: absolute;">
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p class="wave-text">&copy; <?= date('Y') ?> Race for Water. Tous droits réservés.</p>
    </footer>
</body>
</html>