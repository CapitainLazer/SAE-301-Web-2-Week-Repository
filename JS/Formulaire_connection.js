document.addEventListener('DOMContentLoaded', () => {
  const connexionElement = document.querySelector('.connexion');
  const inscriptionElement = document.querySelector('.inscription');
  const connexionLink = document.querySelector('.link-connexion');
  const inscriptionLink = document.querySelector('.link-inscription');
  function changeStatus(){
    console.log("okok")
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
  connexionLink.addEventListener("click", changeStatus);
  inscriptionLink.addEventListener("click", changeStatus);
});
  