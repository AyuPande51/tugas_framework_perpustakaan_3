<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>latihan 2</title>
</head>
<body>
    <h1>Latihan 2</h1>
    <p>Halo, nama saya adalah <b>{{ $nama }}</b>, nilai saya adalah <strong>{{ $nilai }} </strong></p>

    @if ($nilai <= 20)
        (<b>Sangat Kurang</b>)
    @elseif ($nilai <= 40)
        (<b>Kurang</b>)
    @elseif ($nilai <= 60)
        (<b>Cukup</b>)
     @elseif ($nilai <= 80)
        (<b>Baik</b>)
    @else
        (<b>Sangat Baik</b>)
    @endif

</body>
</html>