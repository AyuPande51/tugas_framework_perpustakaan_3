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
                    <a class="btn btn-primary" href="{{route('peminjaman.create')}}">Tambah</a>
                </div>
            </form>
        </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped m-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Anggota</th>
                    <!-- <th>Tgl Peminjaman</th> -->
                    <th>Tgl Jatuh Tempo</th>
                    <th>Tgl Pengembalian</th>
                    <th>Denda</th>
                    <th>Status</th>
                    <th>User</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php //$no = 1; 
            ?>
            @foreach ($peminjamans as $peminjaman)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $peminjaman->judul}}</td>
                    <td>{{ $peminjaman->nama }}</td>
                    <!-- <td>{{ $peminjaman->tanggal_peminjaman }}</td> -->
                    <td>{{ $peminjaman->tanggal_pinjam }}</td>
                    <td>{{ $peminjaman->tanggal_kembali }}</td>
                    <td>{{ $peminjaman->denda }}</td>
                    <td>{{ $peminjaman->status }}</td>
                    <td>{{ $peminjaman->nama_user }}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{route('peminjaman.edit', $peminjaman)}}"><i class="fa-solid fa-pen-to-square"></i> Ubah</a> 
                        <form method="POST" class="d-inline" action="{{route('peminjaman.destroy', $peminjaman)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Hapus data?')"><i class="fa-solid fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    @if ($peminjamans->hasPages())
        <div class="card-footer">
            {{ $peminjamans->links()}}
        
    @endif
    </div>
</div>
@endsection