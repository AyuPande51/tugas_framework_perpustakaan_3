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
                    <a class="btn btn-primary" href="{{route('buku.create')}}">Tambah</a>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-striped m-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Qty</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php //$no = 1; ?>
                @foreach($bukus as $buku)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$buku->judul}}</td>
                        <td>{{$buku->qty}}</td>
                        <td>{{$buku->nama_kategori}}</td>
                        <td>{{$buku->deskripsi}}</td>
                        <td>
                            <img src="{{$buku->getImage()}}" alt="" height="100">
                        </td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="{{ route('buku.edit', $buku) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form method="POST" class="d-inline" action="{{ route('buku.destroy', $buku) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Hapus Data')"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        @if ($bukus->hasPages())
            <div class="card-footer">
                {{$bukus->links()}}
            </div>
        @endif
    </div>
@endsection
