  let sidebarFav = document.querySelector(".conteneurSidebarFavoris");
  let sidebarSousFav = document.querySelector(".conteneurSideBarSousFavoris");

  if (sidebarFav) {
      sidebarFav.addEventListener('click', () => {
          if (sidebarSousFav.style.height === "0%") {
              sidebarSousFav.style.height = '252px';
              document.getElementById("arrowFav").style.transform = "rotate(90deg)";

          } else {
              sidebarSousFav.style.height = '0%';
              document.getElementById("arrowFav").style.transform = "none";
              document.getElementById("arrowFav").style.marginleft = "none";
          }
      })
  }

  let dark = document.querySelector(".darkenScreen");
  let dashMenu = document.querySelector(".conteneurSidebar")
  let btnOpen = document.querySelector(".boutonOpen");
  let btnClose = document.querySelector(".boutonClose");

  if (btnClose.addEventListener('click', () => {
          dashMenu.style.width = '0px';
          btnOpen.style.visibility = 'visible';
          dark.style.opacity = '0';
          dark.style.visibility = 'hidden';
      })) {

  }

  if (btnOpen.addEventListener('click', () => {
          dashMenu.style.width = '20%';
          btnOpen.style.visibility = 'hidden';
          dark.style.opacity = '0.7';
          dark.style.visibility = 'visible';
      })) {
  }
