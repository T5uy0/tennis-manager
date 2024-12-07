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
        <h1 class="text-4xl">Réserver votre terrain !</h1>
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
                <div class="element title">Court No 6</div>
                @foreach ($courts as $court)
                    @if ($court->name == 'Court No 6')
                        @if ($court->court_status_id == 1)
                            <div class="element bg-green-700"><a href="{{ route('TennisCourt.show', $court) }}">Libre</a></div>
                        @elseif ($court->court_status_id == 2)
                            <div class="element bg-blue-700">Occupé</div>
                        @else
                            <div class="element bg-red-600">Maintenance</div>
                        @endif
                    @endif
                @endforeach
            </div>
            <div class="columns">
                <div class="element title">Court No 7</div>
                @foreach ($courts as $court)
                    @if ($court->name == 'Court No 7')
                        @if ($court->court_status_id == 1)
                            <div class="element bg-green-700"><a href="{{ route('TennisCourt.show', $court) }}">Libre</a></div>
                        @elseif ($court->court_status_id == 2)
                            <div class="element bg-blue-700">Occupé</div>
                        @else
                            <div class="element bg-red-600">Maintenance</div>
                        @endif
                    @endif
                @endforeach
            </div>
            <div class="columns">
                <div class="element title">Court No 8</div>
                @foreach ($courts as $court)
                    @if ($court->name == 'Court No 8')
                        @if ($court->court_status_id == 1)
                            <div class="element bg-green-700"><a href="{{ route('TennisCourt.show', $court) }}">Libre</a></div>
                        @elseif ($court->court_status_id == 2)
                            <div class="element bg-blue-700">Occupé</div>
                        @else
                            <div class="element bg-red-600">Maintenance</div>
                        @endif
                    @endif
                @endforeach
            </div>
            <div class="columns">
                <div class="element title">Court No 9</div>
                @foreach ($courts as $court)
                    @if ($court->name == 'Court No 9')
                        @if ($court->court_status_id == 1)
                            <div class="element bg-green-700"><a href="{{ route('TennisCourt.show', $court) }}">Libre</a></div>
                        @elseif ($court->court_status_id == 2)
                            <div class="element bg-blue-700">Occupé</div>
                        @else
                            <div class="element bg-red-600">Maintenance</div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>
