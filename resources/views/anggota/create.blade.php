@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-info">
                    <ul>
                        @foreach ($errors->all() as $err)
                        <li>{{$err}}</li>       
                        @endforeach
                    </ul>
                </div>   
            @endif
            <form method="POST" action="{{route('anggota.store')}}" enctype="multipart/form-data">                @csrf 
                {{-- ini fungsi unntuk token form laravel --}}
                <div class="mb-3">
                    <label>nama_anggota</label>
                    <input class="form-control" type="text" name="nama_anggota" value={{old('nama_anggota')}}>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input class="form-control" type="text" name="email" value={{old('email')}}>
                </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-danger" href="{{route('buku.index')}}">Kembali</a>
                </div>
            </form>
        </div>
    </div> 
@endsection