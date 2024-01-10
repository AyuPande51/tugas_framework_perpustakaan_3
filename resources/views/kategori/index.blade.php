@extends('layout.app')
@section('content')
    @if (session()->has('message'))
        <p class="alert alert-info">{{ session('message')}}</p>
    @endif
<div class="card mb-3 ">
        <div class="card-header">
            <form class="row row-cols-auto g-1">
                <div class="col">
                    <input class="form-control" name="q" value="{{ $q }}" placeholder="Pencarian...../">
                </div>
                <div class="col">
                    <button class="btn btn-success">Refresh</button>
                </div> 
                <div class="col">
                    <a class="btn btn-primary" href="{{route('kategori.create')}}">Tambah</a>
                </div>
            </form>
        </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped m-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php //$no = 1; 
            ?>
            @foreach ($kategoris as $kategori)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $kategori->id_kategori }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{route('kategori.edit', $kategori)}}"><i class="fa-solid fa-pen-to-square"></i> Ubah</a> 
                        <form method="POST" class="d-inline" action="{{route('kategori.destroy', $kategori)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Hapus data?')"><i class="fa-solid fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    @if ($kategoris->hasPages())
        <div class="card-footer">
            {{ $kategoris->links()}}
        
    @endif
    </div>
</div>
@endsection