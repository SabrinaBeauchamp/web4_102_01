<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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