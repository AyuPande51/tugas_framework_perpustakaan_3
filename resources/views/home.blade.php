@extends('layout.app')
@section('content')
    @auth
    <p>Selamat Datang <b>{{Auth :: user()->nama_user}}</b></p>
    @endauth
@endsection
