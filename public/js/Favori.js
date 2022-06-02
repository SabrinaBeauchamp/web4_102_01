class Favori {
    static init(){
        window.addEventListener("load", e=>{
            var liens = document.querySelectorAll(".like_user");
            liens.forEach(lien => {
                lien.addEventListener("click", e=> {
                    this.click(e.target);
                });
            })
        });
    }

    static click(lien) {
        var xhr = new XMLHttpRequest();
        if(lien.classList.contains("liked")) {
            console.log(1);
            var url = lien.dataset.dislike;
        }
        else {
            console.log(2);
            var url = lien.dataset.like;
        }
        console.log(url);
        xhr.open("get", url);
        xhr.responseType = "json";
        xhr.addEventListener("load", e=> {
            console.log(e.target.response.resultat);
            if(e.target.response.resultat === true) {
                lien.classList.add("liked");
                lien.classList.replace("fa-solid", "fa-regular");
            }
            else {
                lien.classList.remove("liked");
                lien.classList.replace("fa-regular", "fa-solid");
            }
        });
        xhr.send();
    }
}

Favori.init();