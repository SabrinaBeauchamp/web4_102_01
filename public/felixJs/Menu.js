/** * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * @module Menu
 */

class Menu {

    static main() {
        this.ouverturePanneau();
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

    static init() {
        return new Promise(resolve => {
            window.addEventListener("load", () => {});
            resolve();
        });
    }
}

Menu.init().then(() => {
    Menu.main();
});