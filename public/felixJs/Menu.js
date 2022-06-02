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
        if (panneau.classList !== null){
            panneau.classList.add('panneau-open');
            if (panneau.classList.contains('panneau-close')) {
                panneau.classList.remove('panneau-close');
            }
        }
    }
    static closePanneau(panneau) {
        if (panneau !== null){
            panneau.classList.add('panneau-close');
            if (panneau.classList.contains('panneau-open')) {
                panneau.classList.remove('panneau-open');
            }
        }
    }

    static ouverturePanneau() {
        var container_panneau, btn_panneau, btn1, btn2, btn3, panneau0, panneau, panneau2, panneau3;
        container_panneau = document.querySelector('.container-panneau');
        btn_panneau = document.querySelector('.btn-ouvrirPanneau');
        btn1 = document.querySelectorAll('.btn1');
        btn2 = document.querySelectorAll('.btn2');
        btn3 = document.querySelectorAll('.btn3');
        panneau0 = document.querySelector(".panneau0");
        panneau = document.querySelector(".panneau");
        panneau2 = document.querySelector(".panneau2");
        panneau3 = document.querySelector(".panneau3");
        container_panneau.addEventListener("mouseleave", e => {
            this.closePanneau(panneau0);
            this.closePanneau(panneau);
            this.closePanneau(panneau2);
            this.closePanneau(panneau3);

            e.preventDefault();
        });
        if (panneau.classList.contains('isPanneau')) {
            btn_panneau.addEventListener("mousedown", e => {
                this.togglePanneau(panneau0);
                this.togglePanneau(panneau);
                this.togglePanneau(panneau2);
                this.togglePanneau(panneau3);
   
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

Menu.init().then(() => {
    Menu.main();
});