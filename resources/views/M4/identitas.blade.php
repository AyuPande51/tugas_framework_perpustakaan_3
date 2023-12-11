@extends('m4.layout')
    @section('content')
        <h2>Identitas</h2>
        <p> Halo, nama saya <strong>{{ $nama }}</strong>, saya berumur <strong>{{ $umur }}</strong>, 
            saya tinggal di <strong>{{ $alamat }}</strong></p>
@endsection
