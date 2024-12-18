// Retour vers le haut
document.addEventListener('DOMContentLoaded', function () {
    // Récupération de l'élément pour le retour vers le haut
    const imageRetourHaut = document.getElementById('retourHaut');

    // Événement de défilement pour afficher ou masquer l'élément
    window.onscroll = function () {
        afficherImageRetourHaut();
    };

    // Fonction pour afficher ou masquer l'élément en fonction de la position de défilement
    function afficherImageRetourHaut() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            imageRetourHaut.style.display = "block";
        } else {
            imageRetourHaut.style.display = "none";
        }
    }

    // Événement de clic pour faire défiler la page vers le haut
    imageRetourHaut.addEventListener('click', function () {
        retournerHautPage();
    });

    // Fonction pour faire défiler la page vers le haut
    function retournerHautPage() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
});