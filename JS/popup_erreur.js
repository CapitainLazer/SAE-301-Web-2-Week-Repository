window.addEventListener('load', function() {
  let urlParamsZC = new URLSearchParams(window.location.search);
  let error = urlParamsZC.get('error');
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
    alert("Le compte n'existe pas avec cette adresse mail.");
  }
});