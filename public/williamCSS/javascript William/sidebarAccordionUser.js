  let sidebarFav = document.querySelector(".conteneurSidebarFavoris");
  let sidebarSousFav = document.querySelector(".conteneurSideBarSousFavoris");

  sidebarFav.addEventListener('click', () => {
    if(sidebarSousFav.style.height === "0%") {
      sidebarSousFav.style.height ='252px';
      document.getElementById("arrowFav").style.transform = "rotate(90deg)";
      
    }
    else{
      sidebarSousFav.style.height='0%';
      document.getElementById("arrowFav").style.transform = "none";
      document.getElementById("arrowFav").style.marginleft = "none";
    }
  })

  let dashMenu =document.querySelector(".conteneurSidebar")
  let btnOpen = document.querySelector(".boutonOpen");
  let btnClose = document.querySelector(".boutonClose");

  // btn.addEventListener('click', () => {
  //   if(dashMenu.style.width === "20%") {
  //     dashMenu.style.width ='0%';
  //     dashMenu.style.display ='none';
      
  //   }
  //   else{
  //     dashMenu.style.width='20%'; dashMenu.style.display ='flex';
  //   }
  // })

if(btnOpen) {
  btnOpen.addEventListener('click', () => {
    dashMenu.style.width = '20%';
    btnOpen.style.visibility ='hidden';
  })
}

if(btnClose) {
  btnClose.addEventListener('click', () => {
    dashMenu.style.width = '0px';
    btnOpen.style.visibility ='visible';
  })
}