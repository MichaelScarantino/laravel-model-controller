<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
    
    <h2>Lista Film:</h2>

    @foreach ($movies as $movie)
    
        <div>
            <h2>{{ $movie->title }}</h2>
            <div>Autore: {{ $movie->nationality }}</div>
            <div>Data di uscita: {{ $movie->date }}</div>
            <div>Voto: {{ $movie->vote }}</div>
        </div>
    @endforeach

</body>
</html>