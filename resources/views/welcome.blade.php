<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>

        <header>
            <nav>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                </ul>
            </nav>
        </header>

        @dump($teachers);

        <main>
            <h1>Classe {{$class_number}} </h1>
            <p>{{$welcome_message}}</p>

            <h3>Insegnanti:</h3>
            <ul>
                @foreach ($teachers as $teacher)
                    <li>{{$teacher}}</li>
                @endforeach
            </ul>

            <h3>Studenti:</h3>
            @if (count($students) == 0)
                <h4>Nessuno studente</h4>
            @else
                <ul>
                    @foreach ($students as $student)
                        <li>{{$student}}</li>
                    @endforeach
                </ul>
            @endif
            <h5>Totale studenti: {{count($students)}}</h5>
        </main>

    </body>
</html>
