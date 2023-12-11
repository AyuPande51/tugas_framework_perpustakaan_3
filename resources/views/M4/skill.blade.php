@extends('m4.layout')
@section('content')
<p>Berikut skill yang saya miliki :</p>
    <ol>
        @for ($i = 0; $i < count($skill); $i++)
            <li> {{$skill[$i]}}</li>
        @endfor
    </ol>
    
@endsection
   