document.addEventListener('DOMContentLoaded', function () {
    const imageRetourHaut = document.getElementById('retourHaut');
    window.onscroll = function () {
        afficherImageRetourHaut();
    };
    function afficherImageRetourHaut() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            imageRetourHaut.style.display = "block";
        } else {
            imageRetourHaut.style.display = "none";
        }
    }
    imageRetourHaut.addEventListener('click', function () {
        retournerHautPage();
    });
    function retournerHautPage() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
});