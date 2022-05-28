/** * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * @module Calendrier
 */

class Calendrier {

    static main() {
        this.ouverturePanneau();
    }
    
    /** * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Ouverture du menu
     */
    static togglePanneau(case_calendrier) {
        console.log("3");
        var popups, popup_copy;
        popups = case_calendrier.querySelectorAll(".popup");
        for (let y = 0; y < popups.length; y++) {
            const popup = popups[y];
            popup_copy = popup.cloneNode(true);
            document.querySelector(".calendrier-popup").appendChild(popup_copy);
            console.log("4");
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
        var cases_calendrier, calendrier_popup;
        cases_calendrier = document.querySelectorAll(".calendrier-item");
        calendrier_popup = document.querySelector(".calendrier-popup");
        for (let i = 0; i < cases_calendrier.length; i++) {
            const case_calendrier = cases_calendrier[i];
            console.log("1");
            case_calendrier.addEventListener("mousedown", e => {
                while (calendrier_popup.firstChild) {
                    calendrier_popup.removeChild(calendrier_popup.lastChild);
                }
                this.togglePanneau(case_calendrier);
                console.log("2");
                e.preventDefault();
            });
            

        }
        // btn_panneau = document.querySelector('.btn-ouvrirPanneau');
        // btn1 = document.querySelectorAll('.btn1');
        // btn2 = document.querySelectorAll('.btn2');
        // btn3 = document.querySelectorAll('.btn3');
        // panneau = document.querySelector(".panneau");
        // panneau2 = document.querySelector(".panneau2");
        // panneau3 = document.querySelector(".panneau3");
        // if (panneau.classList.contains('isPanneau')) {
            
        //     btn_panneau.addEventListener("mousedown", e => {
        //         this.togglePanneau(panneau);
        //         this.togglePanneau(panneau2);
        //         this.togglePanneau(panneau3);
   
        //         e.preventDefault();
        //     });
        //     for (let i = 0; i < btn1.length; i++) {
        //         btn1[i].addEventListener("mousedown", e => {
        //             this.openPanneau(panneau2);
        //             this.closePanneau(panneau3);
        //             e.preventDefault();
        //         });
        //     }
        //     for (let i = 0; i < btn2.length; i++) {
        //         btn2[i].addEventListener("mousedown", e => {
        //             this.openPanneau(panneau3);
        //             e.preventDefault();
        //         });
        //     }
        // }
    }

    static init() {
        return new Promise(resolve => {
            window.addEventListener("load", () => {});
            resolve();
        });
    }
}

Calendrier.init().then(() => {
    Calendrier.main();
});