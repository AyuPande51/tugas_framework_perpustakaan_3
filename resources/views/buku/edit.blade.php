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
            <form method="POST" action="{{route('buku.update', $buku)}}">               
                {{-- ini fungsi unntuk token form laravel --}}
                @csrf
                @method('put')
                <div class="mb-3">
                    <label>Judul</label>
                    <input class="form-control" type="text" name="judul" value= "{{old('judul', $buku->judul )}}" />
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
                    <input class="form-control" type="text" name="qty" value="{{old('Qty', $buku->Qty)}}" />
                </div>
                <div class="mb-3">
                    <label>Deskripsi</label>
                    <input class="form-control" type="text" name="deskripsi" value="{{old('deskripsi', $buku->deskripsi)}}" />
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-danger" href="{{route('buku.index')}}">Kembali</a>
                </div>
            </form>
        </div>
    </div> 
@endsection