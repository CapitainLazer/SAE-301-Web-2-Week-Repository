
/*
let imageOeuvre;

console.log("coucou");


function afficherPopUp(){
    console.log("coucou");
    imageOeuvre = document.getElementByClassName('image-card');
    window.alert('Hello');
}

imageOeuvre.addEventListener("click", afficherPopUp);


window.addEventListener("load", afficherPopUp); 
*/

/*
document.addEventListener("DOMContentLoaded", function() {
    // Récupérer tous les éléments avec la classe "image-card"
    let imageOeuvres = document.getElementsByClassName("image-card");

    // Parcourir tous les éléments et ajouter un gestionnaire de clic
    for (let imageOeuvre of imageOeuvres) {
        imageOeuvre.addEventListener("click", function() {
            // Afficher une alerte lors du clic sur une image
            window.alert("Hello");
        });
    }
});
*/
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".image-card").forEach(function (imageOeuvre) {
        imageOeuvre.addEventListener("click", function (event) {
            // Trouver l'image dans l'élément cliqué
            const image = event.currentTarget.querySelector("img");

            // Vérifier si une image est trouvée
            if (image) {
                const imageSrc = image.getAttribute("src");
                const imageAlt = image.getAttribute("alt") || "Image d'une œuvre";

                // Créer une pop-up affichant l'image
                const popUpContent = `
                    <div class="popup-content">
                        <img src="${imageSrc}" alt="${imageAlt}">
                        <p>${imageAlt}</p>
                        <button id="close-popup">Fermer</button>
                    </div>
                `;

                // Ajouter la pop-up au document
                const popUpWrapper = document.createElement("div");
                popUpWrapper.id = "popup-wrapper";
                popUpWrapper.style.position = "fixed";
                popUpWrapper.style.top = "0";
                popUpWrapper.style.left = "0";
                popUpWrapper.style.width = "100%";
                popUpWrapper.style.height = "100%";
                popUpWrapper.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
                popUpWrapper.style.zIndex = "999";
                popUpWrapper.innerHTML = popUpContent;

                document.body.appendChild(popUpWrapper);

                // Ajouter un événement pour fermer la pop-up
                document.getElementById("close-popup").addEventListener("click", function () {
                    document.body.removeChild(popUpWrapper);
                });
            } else {
                console.error("Aucune image trouvée dans l'élément cliqué.");
            }
        });
    });
});
