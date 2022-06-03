/** * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * @module Animation
 */

class Animation {

    static main() {
        console.log("Animations.js");
    }

    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
    * Animation des titres de sections
    */
    static animationHeader() {
        var header;
        header = document.getElementById("header");
        header.classList.add("slide");
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
            window.addEventListener("load", () => {
                this.animationHeader();
            });
            window.addEventListener('scroll', () => {
                this.animationTitre();
                this.animationImagesDecoration();
                this.animationParagraphes();

            });
            resolve();
        });
    }
}

Animation.init().then(() => {
    Animation.main();
});
