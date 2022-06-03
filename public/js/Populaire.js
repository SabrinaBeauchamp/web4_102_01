class Populaire {
    static init(){
        window.addEventListener("load", e=>{
            var liens = document.querySelectorAll(".populaire");
            liens.forEach(lien => {
                lien.addEventListener("click", e=> {
                    this.click(e.target);
                });
            })
        });
    }

    static click(lien) {
        var xhr = new XMLHttpRequest();
            console.log(1);
            var url = lien.dataset.populaire;
        
        console.log(url);
        xhr.open("get", url);
        xhr.responseType = "json";
        xhr.addEventListener("load", e=> {
            console.log(e.target.response.resultat);
            if(e.target.response.resultat === true) {
                lien.classList.add("is_populaire");
                lien.classList.replace("fa-regular", "fa-solid");
            }
            else {
                lien.classList.remove("is_populaire");
                lien.classList.replace("fa-solid", "fa-regular");
            }
        });
        xhr.send();
    }
}

Populaire.init();