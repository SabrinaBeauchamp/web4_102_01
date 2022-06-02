<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page forfait 1.1</title>
    <link rel="stylesheet" href="{{asset('williamCSS/style.css')}}">
    <script src="https://kit.fontawesome.com/f4e3a6480f.js" crossorigin="anonymous"></script>
    <!-- INCLURE LES SCRIPTS QUI SONT A LA FIN DU DOC SINON CAROUSEL MARCHE PAS -->
</head>

<body>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        @yield('contenu')
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="textCarouselIcon">Précédent</span>
            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="false"></span>
            <span class="">Prochain</span>
        </button>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="{{asset('js/forfaitListeAnim.js')}}"></script>

</html>