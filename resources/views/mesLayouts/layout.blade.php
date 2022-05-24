<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('williamCSS/style.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('')}}"> -->
    <script src="{{asset('js/Favori.js')}}"></script>
    <title>@yield("titre") - Les Forfaits</title>
</head>
<body>
    <div class="interface">
        <header>
            <a href="{{asset('')}}">
                <h1 class="titre">@yield("titre")</h1>
            </a>
        </header>
        @include('groupes.menu')
        <footer></footer>
        <div class="main">
            @yield("contenu")
            
        </div>
    </div>
</body>
</html>