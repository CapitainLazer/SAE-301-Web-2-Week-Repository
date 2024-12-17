  /* Fonction pour afficher une pop-up
function showPopup() {
    alert("Adresse e-mail invalide.");
}
  
// Attacher la fonction à un événement de clic sur un bouton
document.getElementById("myButton").addEventListener("click", showPopup);*/
  

// Écouteur d'événement pour exécuter des actions lorsque la page est entièrement chargée
window.addEventListener('load', function() {
  // Récupération des paramètres d'URL
  let urlParamsZC = new URLSearchParams(window.location.search);
  // Récupération de la valeur du paramètre 'error'
  let error = urlParamsZC.get('error');
  // Vérification si le paramètre 'error' est défini à '1'
  if (error === '1') {
      alert('Adresse e-mail invalide.');
  }
  if (error === '5') {
    alert('Les mots de passe ne correspondent pas.');
  }
  if (error === '3') {
    alert('Cette adresse e-mail est déjà utilisée. Veuillez en choisir une autre.');
  }
  if (error === '4') {
    alert("Le mot de passe ou l'adresse mail est invalide.");
  }
  if (error === '5') {
    alert("Le compte n'existe pas.");
  }
});