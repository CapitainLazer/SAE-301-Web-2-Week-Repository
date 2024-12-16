document.addEventListener('DOMContentLoaded', () => {
const connexionElement = document.querySelector('.connexion');
const inscriptionElement = document.querySelector('.inscription');

const connexionLink = document.querySelector('.link-connexion');
const inscriptionLink = document.querySelector('.link-inscription');

/**
 * Changer l'état des liens et des formulaires au click
 */
function changeStatus(){
  if(connexionElement.classList.contains('hidden')){
    connexionElement.classList.remove('hidden');
    inscriptionElement.classList.add('hidden');

    inscriptionLink.classList.remove('hidden');
    connexionLink.classList.add('hidden');
  }else{
    inscriptionElement.classList.remove('hidden');
    connexionElement.classList.add('hidden');

    connexionLink.classList.remove('hidden');
    inscriptionLink.classList.add('hidden');
  }
}


/**
 * Ajout des listener
 */
connexionLink.addEventListener("click", changeStatus());
inscriptionLink.addEventListener("click", changeStatus());
 
});




