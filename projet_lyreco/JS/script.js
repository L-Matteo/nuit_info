document.addEventListener("DOMContentLoaded", () => {
    const logoContainer = document.getElementById("logoContainer");
    const logo = document.getElementById("logo");

    // Liste des différentes formes possibles pour le logo
    const logoShapes = [
        {
            type: 'image',
            content: '<img src="assets/logo_lyreco.png" alt="Logo Lyreco" id="logo" />'
        },
        {
            type: 'text',
            content: '<div id="logo" style="font-size: 40px; font-weight: bold; color: #004d40; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">LYRECO</div>'
        }
    ];

    // Fonction pour changer la forme du logo aléatoirement
    function setRandomLogoShape() {
        const randomIndex = Math.floor(Math.random() * logoShapes.length);
        const selectedShape = logoShapes[randomIndex];

        // Vider le conteneur du logo et ajouter la nouvelle forme
        logoContainer.innerHTML = selectedShape.content;

        // Appliquer les animations et position aléatoire
        const logo = document.getElementById("logo");

        // Position aléatoire pour le logo
        const containerWidth = logoContainer.offsetWidth;
        const containerHeight = logoContainer.offsetHeight;
        const logoWidth = logo.offsetWidth;
        const logoHeight = logo.offsetHeight;

        const randomX = Math.random() * (containerWidth - logoWidth);
        const randomY = Math.random() * (containerHeight - logoHeight);

        logo.style.left = `${randomX}px`;
        logo.style.top = `${randomY}px`;

        // Animation au survol
        logo.addEventListener("mouseover", () => {
            logo.style.transform = "scale(1.2)";
            logo.style.transition = "transform 0.3s ease";
        });
        logo.addEventListener("mouseout", () => {
            logo.style.transform = "scale(1)";
        });
    }

    // Ajouter un son d'applaudissements
    const applauseSound = new Audio('assets/applaudissements.mp3'); // Charger le son

    // Ajouter une animation lors du clic sur le logo
    logoContainer.addEventListener("click", (event) => {
        // Vérifier si le clic est effectué sur le logo
        if (event.target.id === "logo") {
            // Ajouter l'animation de feu d'artifice global
            for (let i = 0; i < 30; i++) {
                const firework = document.createElement('div');
                firework.classList.add('firework');
                firework.style.left = `${Math.random() * window.innerWidth}px`;  // Positionnement aléatoire sur l'écran
                firework.style.top = `${Math.random() * window.innerHeight}px`;
                document.body.appendChild(firework);

                // Supprimer les effets après l'animation
                setTimeout(() => {
                    firework.remove();
                }, 1500); // Durée de l'animation de feu d'artifice
            }

            // Jouer le son d'applaudissements
            applauseSound.play();

            // Réinitialiser l'animation et recharger la page après un délai
            setTimeout(() => {
                alert("Bravo ! Vous avez trouvé le logo !");
                location.reload(); // Rafraîchit la page pour changer la forme et la position
            }, 1500); // Délai pour permettre à l'animation de se dérouler
        }
    });

    // Initialiser avec une forme et une position aléatoire
    setRandomLogoShape();
});