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
<video autoplay loop muted id="background-video">
        <source src="https://videos.pexels.com/video-files/3765078/3765078-uhd_2560_1440_30fps.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la vidéo.
    </video>
    <?php require_once 'nav.php' ?>

    <!-- Contenu principal -->
    <main>
        <div id="infoBox"
            style="display:none; position:absolute; background:#fff; border:1px solid #000; padding:10px; border-radius:5px;">
            <h3 id="infoTitle"></h3>
            <p id="infoText"></p>
        </div>

        <div id="homme">
            <svg viewBox="-260 0 1920 680" xmlns="http://www.w3.org/2000/svg">
                <!-- Tête -->
                <circle class="body-part" cx="150" cy="70" r="45" data-title="La Tête"
                    data-info="La tête contient le cerveau, qui régule les fonctions du corps, tout comme l'océan régule le climat de la planète.">
                </circle>
                <!-- Cou -->
                <rect class="body-part" x="127.5" y="115" width="45" height="45" data-title="Le Cou"
                    data-info="Le cou transporte les informations entre la tête et le corps, similaire aux courants océaniques connectant différentes régions du globe.">
                </rect>
                <!-- Épaules -->
                <rect class="body-part" x="90" y="150" width="120" height="30" data-title="Les Épaules"
                    data-info="Les épaules permettent de supporter et de connecter les bras, tout comme les marées soutiennent et connectent les écosystèmes côtiers.">
                </rect>
                <!-- Poitrine -->
                <rect class="body-part" x="105" y="180" width="90" height="75" data-title="La Poitrine"
                    data-info="La poitrine protège le cœur et les poumons, tout comme les récifs coralliens protègent les écosystèmes marins.">
                </rect>
                <!-- Bras Gauche -->
                <rect class="body-part" x="60" y="180" width="30" height="120" data-title="Les Bras"
                    data-info="Les bras permettent le mouvement et l'action, tout comme les vagues de l'océan façonnent les côtes.">
                </rect>
                <circle class="body-part" cx="75" cy="315" r="15" data-title="Les Coudes"
                    data-info="Les coudes offrent flexibilité et mouvement, similaire aux zones de transition dans les courants marins.">
                </circle>
                <rect class="body-part" x="60" y="330" width="30" height="120" data-title="L'Avant-Bras"
                    data-info="L'avant-bras permet des gestes précis, comme les rivières qui se jettent dans l'océan influencent les écosystèmes locaux.">
                </rect>
                <!-- Bras Droit -->
                <rect class="body-part" x="210" y="180" width="30" height="120" data-title="Les Bras"
                    data-info="Les bras permettent le mouvement et l'action, tout comme les vagues de l'océan façonnent les côtes.">
                </rect>
                <circle class="body-part" cx="225" cy="315" r="15" data-title="Les Coudes"
                    data-info="Les coudes offrent flexibilité et mouvement, similaire aux zones de transition dans les courants marins.">
                </circle>
                <rect class="body-part" x="210" y="330" width="30" height="120" data-title="L'Avant-Bras"
                    data-info="L'avant-bras permet des gestes précis, comme les rivières qui se jettent dans l'océan influencent les écosystèmes locaux.">
                </rect>
                <!-- Abdomen -->
                <rect class="body-part" x="120" y="295" width="60" height="105" data-title="L'Abdomen"
                    data-info="L'abdomen protège les organes essentiels, tout comme les herbiers marins abritent la biodiversité sous-marine.">
                </rect>
                <!-- Cœur -->
                <circle id="Coeur" class="body-part" cx="165" cy="205" r="22.5" data-title="Le Coeur"
                    data-info="Le cœur humain fonctionne comme une pompe, similaire aux courants océaniques qui déplacent l'eau pour maintenir l'équilibre des écosystèmes.">
                </circle>
                <!-- Poumons -->
                <ellipse class="body-part" cx="115" cy="255" rx="30" ry="45" data-title="Les Poumons"
                    data-info="Les poumons échangent des gaz comme l'océan absorbe et relâche le dioxyde de carbone, régulant l'atmosphère.">
                </ellipse>
                <ellipse class="body-part" cx="185" cy="255" rx="30" ry="45" data-title="Les Poumons"
                    data-info="Les poumons échangent des gaz comme l'océan absorbe et relâche le dioxyde de carbone, régulant l'atmosphère.">
                </ellipse>
                <!-- Estomac -->
                <rect class="body-part" x="127.5" y="300" width="45" height="60" rx="7.5" data-title="L'Estomac"
                    data-info="L'estomac décompose les aliments, tout comme les fonds marins recyclent les nutriments essentiels à la vie océanique.">
                </rect>
                <!-- Intestin Grêle -->
                <rect class="body-part" x="135" y="360" width="30" height="75" rx="7.5" data-title="L'Intestin Grêle"
                    data-info="L'intestin grêle absorbe les nutriments, tout comme les zones intertidales soutiennent la vie marine.">
                </rect>
                <!-- Gros Intestin -->
                <rect class="body-part" x="127.5" y="425" width="45" height="60" rx="7.5" data-title="Le Gros Intestin"
                    data-info="Le gros intestin transforme les déchets, semblable aux marécages qui filtrent les polluants.">
                </rect>
                <!-- Jambes -->
                <rect class="body-part" x="112.5" y="480" width="30" height="150" data-title="Les Jambes"
                    data-info="Les jambes supportent le corps humain, tout comme les montagnes sous-marines soutiennent les écosystèmes marins.">
                </rect>
                <rect class="body-part" x="157.5" y="480" width="30" height="150" data-title="Les Jambes"
                    data-info="Les jambes supportent le corps humain, tout comme les montagnes sous-marines soutiennent les écosystèmes marins.">
                </rect>
                <!-- Genoux -->
                <circle class="body-part" cx="127.5" cy="555" r="15" data-title="Les Genoux"
                    data-info="Les genoux permettent la flexion, semblables aux zones de pli dans les plaques océaniques.">
                </circle>
                <circle class="body-part" cx="172.5" cy="555" r="15" data-title="Les Genoux"
                    data-info="Les genoux permettent la flexion, semblables aux zones de pli dans les plaques océaniques.">
                </circle>
                <!-- Pieds -->
                <ellipse class="body-part" cx="112.5" cy="645" rx="22.5" ry="15" data-title="Les Pieds"
                    data-info="Les pieds permettent le mouvement et la stabilité, tout comme les bancs de sable stabilisent les côtes.">
                </ellipse>
                <ellipse class="body-part" cx="187.5" cy="645" rx="22.5" ry="15" data-title="Les Pieds"
                    data-info="Les pieds permettent le mouvement et la stabilité, tout comme les bancs de sable stabilisent les côtes.">
                </ellipse>
            </svg>
        </div>
    </main>
    <?php require_once 'footer.php' ?>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const bodyParts = document.querySelectorAll('.body-part');
        const infoBox = document.getElementById('infoBox'); // Supposons que cette boîte existe déjà
        const infoTitle = document.getElementById('infoTitle'); // Élément où insérer le titre
        const infoText = document.getElementById('infoText');   // Élément où insérer le texte

        bodyParts.forEach(part => {
            part.addEventListener('click', (e) => {
                const title = part.getAttribute('data-title');
                const info = part.getAttribute('data-info');

                // Mettre à jour le contenu de la boîte
                infoTitle.textContent = title;
                infoText.textContent = info;

                // Positionner et afficher la boîte d'information
                infoBox.style.top = `${e.pageY}px`;
                infoBox.style.left = `${e.pageX}px`;
                infoBox.style.display = 'block';
            });
        });

        // Fermer la boîte si l'utilisateur clique en dehors
        document.addEventListener('click', (e) => {
            if (!e.target.classList.contains('body-part') && infoBox.style.display === 'block') {
                infoBox.style.display = 'none';
            }
        });
    });


</script>

</html>