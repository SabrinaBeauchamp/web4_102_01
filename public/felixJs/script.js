/** * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * @module App
 */

class App {

    static main() {
        this.containerMenu = document.getElementById("container-menu");
        // this.containerMenu.appendChild(this.creer_menu());
        this.containerCarrousel = document.getElementById("container-carrousel");
        this.containerCarrousel.appendChild(this.creer_carrousel());
        this.ouverturePanneau();

    }
    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Création du menu
     */
    static creer_menu() {
        var resultat, btn, containerBtn, iBtn, barre, zonePanneau, panneau, titrePanneau, ul, li, btn;

        resultat = document.createElement("nav");
        resultat.id = "nav-principale";

        btn = document.createElement("div");
        btn.classList.add("zone-btn");
        btn.classList.add("isPanneau");
        btn.classList.add("panneau-close");
        resultat.appendChild(btn);

        containerBtn = document.createElement("div");
        containerBtn.classList.add("container-btn-ouvrirPanneau");
        btn.appendChild(containerBtn);

        iBtn = document.createElement("i");
        iBtn.classList.add("btn-ouvrirPanneau");
        iBtn.tabIndex = 0;
        containerBtn.appendChild(iBtn);

        // barre = document.createElement("div");
        // barre.classList.add("bar");
        // barre.innerHTML = "Barre de recherche";
        // btn.appendChild(barre);

        zonePanneau = document.createElement("div");
        zonePanneau.classList.add("container-panneau");
        resultat.appendChild(zonePanneau);

        for (let i = 0; i < 3; i++) {
            panneau = document.createElement("div");
            if (i == 0) panneau.classList.add("panneau");
            else if (i == 1) panneau.classList.add("panneau2");
            else if (i == 2) panneau.classList.add("panneau3");
            panneau.classList.add("isPanneau");
            panneau.classList.add("panneau-close");
            zonePanneau.appendChild(panneau);

            titrePanneau = document.createElement("h2");
            if (i == 0) titrePanneau.innerHTML = "Groupes";
            else if (i == 1) titrePanneau.innerHTML = "Catégories";
            else if (i == 2) titrePanneau.innerHTML = "Entreprises";
            panneau.appendChild(titrePanneau);

            ul = document.createElement("ul");
            if (i == 0) ul.classList.add("menu1");
            else if (i == 1) ul.classList.add("menu2");
            else if (i == 2) ul.classList.add("menu3");
            panneau.appendChild(ul);

            for (let y = 0; y < 8; y++) {
                li = document.createElement("li");
                ul.appendChild(li);
            }

            ul.childNodes.forEach(li => {
                btn = document.createElement("button");
                if (i == 0) btn.classList.add("btn1");
                else if (i == 1) btn.classList.add("btn2");
                else if (i == 2) btn.classList.add("btn3");
                if (i == 0) btn.innerHTML = "Groupe";
                else if (i == 1) btn.innerHTML = "Catégorie, avec un nom long";
                else if (i == 2) btn.innerHTML = "Entreprise";
                li.appendChild(btn);
            });
        }
        return resultat;
    }

    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Création du carrousel
     */
    static creer_carrousel() {
        var ul, li, activitePopulaire, zoneTexte, nomEntreprise, descriptionEntreprise, imgEntreprise;

        ul = document.createElement("ul");
        ul.classList.add("liste-carrousel");

        for (let i = 0; i < 5; i++) {
            li = document.createElement("li");
            li.classList.add("item-carrousel");
            ul.appendChild(li);
            
            activitePopulaire = document.createElement("div");
            activitePopulaire.classList.add("activitePopulaire");
            li.appendChild(activitePopulaire);
            
            zoneTexte = document.createElement("div");
            zoneTexte.classList.add("activitePopulaire-container-texte");
            activitePopulaire.appendChild(zoneTexte);
            
            nomEntreprise = document.createElement("h3");
            nomEntreprise.innerHTML = "Activité populaire";
            zoneTexte.appendChild(nomEntreprise);
            
            descriptionEntreprise = document.createElement("p");
            descriptionEntreprise.innerHTML = "Depuis au moins trente-six secondes, cette activité est devenue un incontournable pour beaucoup d'amateur de l'agrotourisme dans les Laurentides";
            zoneTexte.appendChild(descriptionEntreprise);
            
            imgEntreprise = document.createElement("img");
            imgEntreprise.classList.add("image-evenement");
            imgEntreprise.src = "images/PlaceholderImage.svg";
            imgEntreprise.alt = "image de l'entreprise";
            activitePopulaire.appendChild(imgEntreprise);
            
        }

        
        return ul;
    }

    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Ouverture du menu
     */
    static togglePanneau(panneau) {
        var zoneBtn;
        zoneBtn = document.querySelector('.zone-btn');
        if (panneau.classList.contains('panneau-open')) {
            panneau.classList.toggle('panneau-close');
            panneau.classList.remove('panneau-open');
        } else {
            panneau.classList.toggle('panneau-open');
            panneau.classList.remove('panneau-close');
        }
    }

    static openPanneau(panneau) {
        panneau.classList.add('panneau-open');
        panneau.classList.remove('panneau-close');
    }
    static closePanneau(panneau) {
        panneau.classList.add('panneau-close');
        panneau.classList.remove('panneau-open');
    }

    static ouverturePanneau() {
        var btn_panneau, btn1, btn2, btn3, panneau, panneau2, panneau3;
        btn_panneau = document.querySelector('.btn-ouvrirPanneau');
        btn1 = document.querySelectorAll('.btn1');
        btn2 = document.querySelectorAll('.btn2');
        btn3 = document.querySelectorAll('.btn3');
        panneau = document.querySelector(".panneau");
        panneau2 = document.querySelector(".panneau2");
        panneau3 = document.querySelector(".panneau3");
        if (panneau.classList.contains('isPanneau')) {

            btn_panneau.addEventListener("mousedown", e => {
                this.togglePanneau(panneau);
                this.closePanneau(panneau2);
                this.closePanneau(panneau3);
                e.preventDefault();
            });
            for (let i = 0; i < btn1.length; i++) {
                btn1[i].addEventListener("mousedown", e => {
                    this.openPanneau(panneau2);
                    this.closePanneau(panneau3);
                    e.preventDefault();
                });
            }
            for (let i = 0; i < btn2.length; i++) {
                btn2[i].addEventListener("mousedown", e => {
                    this.openPanneau(panneau3);
                    e.preventDefault();
                });
            }
        }
    }

    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Détection des éléments
     */
    static isVisible(element) {
        const {
            top,
            bottom
        } = element.getBoundingClientRect();
        const vHeight = (window.innerHeight || document.documentElement.clientHeight);

        return ((top > 0 || bottom > 0) && top < vHeight);
    }

    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Animation des titres de sections
     */
    static animationTitre() {
        const detectAnim = document.querySelectorAll('.detectAnim');
        for (let i = 0; i < detectAnim.length; i++) {
            const titre1 = detectAnim[i].querySelector('h2.titre1');
            const titreAccent = detectAnim[i].querySelector('h2.titre-accent');
            const titre2 = detectAnim[i].querySelector('h2.titre2');
            if (this.isVisible(detectAnim[i])) {
                titre1.style.opacity = "1";
                titre1.style.setProperty('--animate-duration', '1s');
                titre1.classList.add('animate__animated', 'animate__' + 'slideInRight');
                titre2.style.opacity = "1";
                titre2.style.setProperty('--animate-duration', '1s');
                titre2.classList.add('animate__animated', 'animate__' + 'slideInRight');
                titreAccent.style.opacity = "1";
                titreAccent.style.setProperty('--animate-duration', '1s');
                titreAccent.classList.add('animate__animated', 'animate__' + 'fadeIn');

            } else {
                titreAccent.style.opacity = "0";
                titre1.style.opacity = "0";
                titre2.style.opacity = "0";
                titre1.classList.remove('animate__animated', 'animate__' + 'slideInRight');
                titreAccent.classList.remove('animate__animated', 'animate__' + 'fadeIn');
                titre2.classList.remove('animate__animated', 'animate__' + 'slideInRight');
            }
        }
    }

    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Animation des paragraphes
     */
    static animationParagraphes() {
        const p = document.querySelectorAll('.paragraphe');
        for (let i = 0; i < p.length; i++) {
            if (this.isVisible(p[i])) {
                p[i].style.opacity = "1";
                p[i].style.setProperty('--animate-duration', '1s');
                p[i].classList.add('animate__animated', 'animate__' + 'fadeIn');
            } else {
                p[i].style.opacity = "0";
                p[i].classList.remove('animate__animated', 'animate__' + 'fadeIn');
            }
        }
    }

    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Animation des groupes d'images décoratives 
     */
    static animationImagesDecoration() {
        const detectAnim = document.querySelectorAll('.detectAnim2');
        for (let i = 0; i < detectAnim.length; i++) {
            const element1 = detectAnim[i].querySelector('.image1');
            const element2 = detectAnim[i].querySelector('.image2');
            const element3 = detectAnim[i].querySelector('.image3');
            if (this.isVisible(detectAnim[i])) {
                element1.style.opacity = "0.1";
                element1.style.opacity = "1";
                element1.style.setProperty('--animate-duration', '1s');
                element1.classList.add('animate__animated', 'animate__' + 'fadeInRight');
                element2.style.opacity = "1";
                element2.style.setProperty('--animate-duration', '1.5s');
                element2.classList.add('animate__animated', 'animate__' + 'fadeInLeft');
                element3.style.opacity = "1";
                element3.style.setProperty('--animate-duration', '2s');
                element3.classList.add('animate__animated', 'animate__' + 'fadeInRight');
            } else {
                element1.style.opacity = "0";
                element1.classList.remove('animate__animated', 'animate__' + 'fadeInRight');
                element2.style.opacity = "0";
                element2.classList.remove('animate__animated', 'animate__' + 'fadeInLeft');
                element3.style.opacity = "0";
                element3.classList.remove('animate__animated', 'animate__' + 'fadeInRight');
            }
        }
    }
    
    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Initialisation du code au chargement de la page
     */
    static init() {
        return new Promise(resolve => {
            window.addEventListener("load", () => {});
            window.addEventListener('scroll', () => {
                this.animationTitre();
                this.animationImagesDecoration();
                this.animationParagraphes();

            });
            resolve();
        });
    }
}

App.init().then(() => {
    App.main();
});

// anime({
//     targets: '.staggering-grid-demo .el',
//     scale: [
//       {value: .1, easing: 'easeOutSine', duration: 500},
//       {value: 1, easing: 'easeInOutQuad', duration: 1200}
//     ],
//     delay: anime.stagger(200, {grid: [14, 5], from: 'center'})
//   });
