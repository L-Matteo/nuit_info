document.addEventListener("DOMContentLoaded", () => {
    const logo = document.getElementById("logo");
    const applauseSound = new Audio('assets/Applaudissements.mp3');
    const popup = document.createElement('div');
    popup.classList.add('popup');
    popup.innerHTML = `<p>Bravo ! Vous avez cliqué sur le logo.</p><button id="close-popup">Fermer</button>`;
    document.body.appendChild(popup);

    // Fonction pour positionner le logo aléatoirement
    function setRandomPosition() {
        const container = document.querySelector('.logo-container');
        const containerWidth = container.offsetWidth;
        const containerHeight = container.offsetHeight;

        const logoWidth = logo.offsetWidth;
        const logoHeight = logo.offsetHeight;

        // Calcul de la position aléatoire
        const randomX = Math.random() * (containerWidth - logoWidth);
        const randomY = Math.random() * (containerHeight - logoHeight);

        logo.style.left = `${randomX}px`;
        logo.style.top = `${randomY}px`;
    }

    // Créer des feux d'artifice à la position du clic
    function createFireworks(x, y) {
        const fireworkCount = 10; // Nombre de feux d'artifice

        for (let i = 0; i < fireworkCount; i++) {
            const firework = document.createElement('div');
            firework.classList.add('firework');
            document.body.appendChild(firework);

            const angle = (i / fireworkCount) * 2 * Math.PI;
            const distance = Math.random() * 100 + 50; // Distance aléatoire

            const xOffset = distance * Math.cos(angle);
            const yOffset = distance * Math.sin(angle);

            firework.style.setProperty('--x', `${xOffset}px`);
            firework.style.setProperty('--y', `${yOffset}px`);
            firework.style.left = `${x - 5}px`; // Ajuster la position pour centrer sur le clic
            firework.style.top = `${y - 5}px`; // Ajuster la position pour centrer sur le clic

            // Supprimer le feu d'artifice après l'animation
            setTimeout(() => firework.remove(), 1000);
        }
    }

    // Ajouter l'animation d'explosion et jouer le son
    logo.addEventListener("click", (e) => {
        logo.style.animation = "explosion 1s ease-out"; // Explosion
        applauseSound.play(); // Jouer le son d'applaudissements

        // Créer des feux d'artifice à la position du clic
        createFireworks(e.pageX, e.pageY);

        // Afficher la pop-up
        popup.classList.add('active');

        // Réinitialiser l'animation après l'explosion et déplacer le logo
        setTimeout(() => {
            logo.style.animation = "none"; // Réinitialiser l'animation
            setRandomPosition(); // Nouvelle position aléatoire
        }, 1000); // Délai pour que l'explosion dure 1s

        // Recharger la page après la fermeture de la pop-up
        document.getElementById('close-popup').addEventListener('click', () => {
            location.reload();
        });
    });

    // Initialisation
    setRandomPosition(); // Initialiser le logo à une position aléatoire
    logo.style.animation = "move-logo 10s linear infinite"; // Animation de déplacement aléatoire du logo
});