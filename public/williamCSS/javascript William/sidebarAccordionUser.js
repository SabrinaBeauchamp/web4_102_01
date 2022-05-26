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