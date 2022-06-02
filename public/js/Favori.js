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
                var img = lien.appendChild(document.querySelector(".iconeListeForfaits"));
                img.classList.add("fa-heart");
            }
            else {
                lien.classList.remove("liked");
                var img = lien.appendChild(document.querySelector(".iconeListeForfaits"));
                img.classList.remove("fa-heart");
            }
        });
        xhr.send();
    }
}

Favori.init();