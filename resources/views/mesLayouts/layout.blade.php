<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="{{asset('')}}"> -->
    <title>@yield("titre") - Les Forfaits</title>
</head>
<body>
    <div class="interface">
        <header>
            <a href="{{asset('')}}">
                <h1 class="titre">Les Forfaits</h1>
            </a>
        </header>
        <footer></footer>
        <div class="main">
            @yield("contenu")
            <div class="button">
                {{-- if est admin --}}
                <a href="{{route('forfaits.create')}}">Créer un nouveau forfait</a>
            </div>
        </div>
    </div>
</body>
</html>