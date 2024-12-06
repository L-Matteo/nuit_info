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

    <?php require_once 'nav.php'?>

    <!-- Contenu principal -->
    <main>
        <!-- Glass Cards Section -->
        <div class="glass-cards-container">
            <!-- Carte "Notre vision" -->
            <div class="glass-card"> 
                <img id="logoAccueil" src="assets/eye.png">
                <p>Notre Vision: L'océan se réchauffe et devient plus acide en conséquence directe de la dissolution d'une plus grande quantité de CO2. Ces changements endommagent de manière irréversible les écosystèmes marins.</p>
            </div>
            
            <!-- Carte "Notre mission" -->
            <div class="glass-card">
                <img id="logoAccueil" src="assets/cible.png">
                <p>Notre mission: Décarbonner les navires fonctionnant aux énergies fossiles grâce à de nouveaux systèmes véliques adaptés.</p>
            </div>
        </div>

        <!-- Logo Container -->
        <div class="logo-container" style="position: relative; height: 400px; width: 100%;">
            <img id="logo" src="assets/logo_lyreco.png" alt="Logo Lyreco" style="position: absolute;">
        </div>
    </main>
<?php require_once 'footer.php'?>
</body>
</html>