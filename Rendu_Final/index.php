<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site web de qualité ++</title>
    <link rel="stylesheet" href="public/css/style.css">
    <script src="public/js/script.js" defer></script>
</head>
<body>
    <!-- Vidéo de fond -->
    <video autoplay loop muted id="background-video">
        <source src="https://player.vimeo.com/progressive_redirect/playback/890174584/rendition/1080p/file.mp4?loc=external&log_user=0&signature=886f3325106a575c609eb5f2c419208170b4089f02cb1d11eca8e064861ba16d" type="video/mp4">
        Votre navigateur ne supporte pas la vidéo.
    </video>

    <!-- Header -->
    <header>
        <div class="header-table">
            <div class="header-left">
                <h1>Race for Water</h1>
            </div>
            <div class="header-right">
                <nav>
                    <ul>
                        <li><a href="index.php" class="active">Accueil</a></li>
                        <li><a href="#ocean">L'océan</a></li>
                        <li><a href="#podcast">Podcast</a></li>
                        <li><a href="corps_humains.php">Corps Humains</a></li> <!-- Rediriger vers la page corps_humains.php -->
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main>
        <!-- Glass Cards Section -->
        <div class="glass-cards-container">
            <!-- Carte "Notre vision" -->
            <div class="glass-card">
                <h3>Notre vision:</h3>
                <p>L'océan se réchauffe et devient plus acide en conséquence directe de la dissolution d'une plus grande quantité de CO2. Ces changements endommagent de manière irréversible les écosystèmes marins.</p>
            </div>
            
            <!-- Carte "Notre mission" -->
            <div class="glass-card">
                <h3>Notre mission:</h3>
                <p>Décarbonner les navires fonctionnant aux énergies fossiles grâce à de nouveaux systèmes véliques adaptés.</p>
            </div>
        </div>

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