@extends('layout.app')
@section('content')

    @if(session()->has('message'))
        <p class="alert alert-info">{{ session('message')}}</p>
    @endif

    <div class="card mb-3">
        <div class="card-header">
            <form class="row row-cols-auto g-1">
                <div class="col">
                    <input class="form-control" name="q" value= "{{$q}}" placeholder="Pencarian...."/>
                </div>
                <div class="col">
                    <button class="btn btn-success">Refresh</button>
                </div>
                <div class="col">
                    <a class="btn btn-primary" href="{{route('user.create')}}">Tambah</a>
                </div>
            </form>
        </div>

    <div class="card mb-3">
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped m-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Telpon</th>
                    <th>Level</th>
                </tr>
            </thead>
            <@foreach($users as $user)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$user->nama_user}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->telepon}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->level}}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('user.edit', $user) }}" class="btn btn-sm btn-warning" ><i class ="fa fa-edit"></i></a>
                    <form method="POST" class="d-inline" action="{{ route('user.destroy', $user) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Hapus Data')"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@if ($users->hasPages())
    <div class="card-footer">
        {{$users->links()}}
    </div>
@endif
</div>
@endsection
