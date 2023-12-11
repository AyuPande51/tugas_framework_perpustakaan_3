<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 3</title>
</head>
<body>
    <h1>Latihan 3</h1>
    <p>Halo, nama saya adalah <strong>{{ $nama }}</strong>, hobi saya antara lain :</p>
    <ul>
        @foreach ($hobi as $val)
            <li>{{ $val }}</li>  
        @endforeach
    </ul>
    <p>berikut skill yang saya miliki :</p>
    <ol>
        @for ($i = 0; $i < count($skill); $i++)
            <li> {{$skill[$i]}}</li>
        @endfor
    </ol>

</body>
</html>