@csrf

        
        <div class="conteneurProfilNom conteneurProfilAll">
            <label for="nomProfil name">Nom et prénom</label>
            <div class="conteneurInputProfil">
                <i class="fa-solid fa-circle-user"></i>
                <input type="text" name="name" id="name" placeholder="John Appleseed" class="nomProfil" value="{{Auth::user()->name}}">
            </div>
        </div>
        <div class="conteneurProfilEmail conteneurProfilAll">
            <label for="emailProfil email">Adresse courriel</label>
            <div class="conteneurInputProfil">
                <i class="fa-solid fa-envelope"></i>
                <input type="text" name="email" id="email" placeholder="username@email.com" class="emailProfil" value="{{Auth::user()->email}}">
            </div>
        </div>
        <div class="conteneurProfilPhone conteneurProfilAll">
            <label for="phoneProfil telephone">Numéro de téléphone</label>
            <div class="conteneurInputProfil">
                <i class="fa-solid fa-phone"></i>
                <input type="text" name="telephone" id="telephone" placeholder="+1 (450) 123-4567" class="phoneProfil" value="{{Auth::user()->telephone}}">
            </div>
        </div>
        <div class="conteneurProfilAddress conteneurProfilAll">
            <label for="addressProfil adresse">Adresse complète</label>
            <div class="conteneurInputProfil">
                <i class="fa-solid fa-house"></i>
                <input type="text" name="adresse" id="adresse" placeholder="1234 boulevard de Montigny, Saint-Jérôme (Québec) A1B2C3
                " class="addressProfil" value="{{Auth::user()->adresse}}">
            </div>
        </div>