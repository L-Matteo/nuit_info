document.addEventListener("DOMContentLoaded", () => {
    const logo = document.getElementById("logo");

    // Position aléatoire pour le logo
    function setRandomPosition() {
        const container = document.getElementById("logoContainer");
        const containerWidth = container.offsetWidth;
        const containerHeight = container.offsetHeight;

        const logoWidth = logo.offsetWidth;
        const logoHeight = logo.offsetHeight;

        const randomX = Math.random() * (containerWidth - logoWidth);
        const randomY = Math.random() * (containerHeight - logoHeight);

        logo.style.left = `${randomX}px`;
        logo.style.top = `${randomY}px`;
    }

    // Ajouter une animation lors du clic
    logo.addEventListener("click", () => {
        logo.style.animation = "spin 1s linear, fadeOut 1s linear";
        setTimeout(() => {
            alert("Bravo ! Vous avez trouvé le logo !");
            logo.style.animation = ""; // Réinitialise l'animation
        }, 1000);
    });

    // Initialisation
    setRandomPosition();
});