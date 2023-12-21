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
            <form method="POST" action="{{route('buku.store')}}" enctype="multipart/form-data">                @csrf 
                {{-- ini fungsi unntuk token form laravel --}}
                <div class="mb-3">
                    <label>Judul</label>
                    <input class="form-control" type="text" name="judul" value={{old('judul_buku')}}>
                </div>
                <div class="mb-3">
                    <label>Kategori</label>
                    <select class="form-select" name="id_kategori">
                        @foreach($kategoris as $kategori)
                            @if(old('id_kategori') == $kategori->id_kategori)
                                <option value="{{$kategori->id_kategori}}" selected> {{ $kategori->nama_kategori }} </option>
                            @else 
                                <option value="{{$kategori->id_kategori}}"> {{ $kategori->nama_kategori }} </option>
                            @endif
                        @endforeach
                    </select>
                </div> 
                <div class="mb-3">
                    <label>Qty</label>
                    <input class="form-control" type="text" name="qty" value={{old('Qty')}}>
                </div>
                <div class="mb-3">
                    <label>Deskripsi</label>
                    <input class="form-control" type="text" name="deskripsi" value={{old('deskripsi')}}>
                </div>
                <div class="mb-3">
                    <label>Gambar</label>
                    <input class="form-control" type="file" name="gambar">
                </div>

                <div class="col">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-danger" href="{{route('buku.index')}}">Kembali</a>
                </div>
            </form>
        </div>
    </div> 
@endsection