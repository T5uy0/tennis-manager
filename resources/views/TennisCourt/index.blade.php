<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/home/tennis-court.css', 'resources/js/app.js'])
    <title>Réservation</title>
</head>
<body>
    <header>
        @include('home.header')
    </header>
    <main>
        <h1>Réserver votre terrain !</h1>
        <div class="container">
            <div class="columns">
                <div class="element hour">Heure</div>
                <div class="element hour">8h15</div>
                <div class="element hour">9h15</div>
                <div class="element hour">10h15</div>
                <div class="element hour">11h15</div>
                <div class="element hour">12h15</div>
            </div>
            <div class="columns">
                <div class="element">Court No 6</div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
            </div>
            <div class="columns">
                <div class="element">Court No 7</div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
            </div>
            <div class="columns">
                <div class="element">Court No 8</div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
            </div>
            <div class="columns">
                <div class="element">Court No 9</div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
                <div class="element"><a href="">Libre</a></div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>
