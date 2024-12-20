document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".image-card").forEach(function (imageOeuvre) {
        imageOeuvre.addEventListener("click", function (event) {
            const image = event.currentTarget.querySelector("img");
            if (image) {
                const imageSrc = image.getAttribute("src");
                const imageAlt = image.getAttribute("alt") || "Image d'une œuvre";
                const popUpContent = `
                    <div class="popup-content">
                        <img src="${imageSrc}" alt="${imageAlt}">
                        <p>${imageAlt}</p>
                        <button id="close-popup">Fermer</button>
                    </div>
                `;
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
                document.getElementById("close-popup").addEventListener("click", function () {
                    document.body.removeChild(popUpWrapper);
                });
            } else {
                console.error("Aucune image trouvée dans l'élément cliqué.");
            }
        });
    });
});