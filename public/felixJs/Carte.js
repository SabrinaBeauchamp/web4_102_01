/** * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * @module Carte
 */

class Carte {

    static main() {
        this.highlightCarte();
    }
    
    static highlightCarte() {
        var noms, cartes;
        noms = document.querySelector(".liste-carte").childNodes;
        cartes = document.querySelector(".container-background-carte").childNodes;
        for (let i = 0; i < noms.length; i++) {
            const carte = cartes[i];
            noms[i].addEventListener("mouseover", e => {
                carte.style.opacity = "1";
                e.preventDefault();
            });
            noms[i].addEventListener("mouseout", e => {
                carte.style.opacity = "0.1";
                e.preventDefault();
            });
            

        }
    }

    static init() {
        return new Promise(resolve => {
            window.addEventListener("load", () => {});
            resolve();
        });
    }
}

Carte.init().then(() => {
    Carte.main();
});