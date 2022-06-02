let fleche = document.querySelector(".fa-chevron-up");
let menu = document.querySelector(".conteneurBtnCarte");
let conteneurCarte = document.querySelector(".conteneurForfait")

if(fleche) {
  fleche.addEventListener('click', () => {
      if(menu.style.height === "120px") {
        menu.style.height ='0px';
       fleche.style.transform = "rotate(180deg)";
       conteneurCarte.style.height ='330px';
        
      }
      else{
        menu.style.height='120px';
        fleche.style.transform = "none";
        conteneurCarte.style.height ='450px';
      }
    })
}

  