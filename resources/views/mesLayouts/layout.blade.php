<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('williamCSS/style.css')}}">
    <script src="{{asset('https://kit.fontawesome.com/f4e3a6480f.js')}}" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="{{asset('')}}"> -->
    <script src="{{asset('js/Favori.js')}}"></script>
    <script src="{{asset('js/Populaire.js')}}"></script>
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
    <title>@yield("titre") - Les Forfaits</title>
</head>
<body>
    <div class="interface">
        <header>
            <a href="{{asset('')}}">
                <h1 class="titre">@yield("titre")</h1>
            </a>
        </header>
        <div class="main">
            @yield("contenu")
            
        </div>
        <footer>
            <div class="infolettre">
                <h3>
                    Ceci est une infolettre
                </h3>
            </div>
            <p>hello world</p>
        </footer>
    </div>
</body>
</html>