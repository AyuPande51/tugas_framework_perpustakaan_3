@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('peminjaman.update', $peminjaman) }}">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label>Judul Buku</label>
                    <select class="form-control" name="id_buku">
                        <option value="">Pilih Buku</option>
                        @foreach ($bukus as $buku)
                            @if (old('id_buku', $peminjaman->id_buku) == $buku->id_buku)
                                <option value="{{ $buku->id_buku }}" selected> {{ $buku->judul }}
                                </option>
                            @else
                            <option value="{{ $buku->id_buku}}">{{ $buku->judul }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>ID Anggota</label>
                    <input class="form-control" type="text" name="id_user" value="{{ old('id_user', $peminjaman->id_user) }}">
                </div>
                <div class="mb-3">
                    <label>Nama</label>
                    <input class="form-control" type="text" name="nama" value="{{ old('nama', $peminjaman->nama) }}">
                </div>
                <div class="mb-3">
                    <label>telpon</label>
                    <input class="form-control" type="text" name="telpon" value="{{ old('telpon', $peminjaman->telpon) }}">
                </div>
                <!-- <div class="mb-3">
                    <label>Tanggal Peminjaman</label>
                    <input class="form-control" type="date" name="tanggal_peminjaman" value="{{ old('tanggal_pemgembalian', date("Y-m-d"), $peminjaman->tanggal_peminjaman) }}">
                </div> -->
                <div class="mb-3">
                    <label>Tanggal Jatuh Tempo</label>
                    <input class="form-control" type="date" name="tanggal_pinjam" value="{{ old('tanggal_pinjam', date("Y-m-d"), $peminjaman->tanggal_pinjam) }}">
                </div>
                <div class="mb-3">
                    <label>Tanggal Pengembalian</label>
                    <input class="form-control" type="date" name="tanggal_kembali" value="{{ old('tanggal_kembali', date("Y-m-d"), $peminjaman->tanggal_kembali) }}">
                </div>
                <div class="mb-3">
                    <label>Denda</label>
                    <input class="form-control" type="text" name="denda" value="{{ old('denda', $peminjaman->denda) }}">
                </div>
                <div class="mb-3">
                    <label>Status Pengembalian</label>
                    <select class="form-select" name="status">
                        <option value="{{ old('status', $peminjaman->status)}}">Belum</option>
                        <option value="{{ old('status', $peminjaman->status)}}">Sudah</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success">Simpan</button>
                    <a class="btn btn-danger" href="{{ route('peminjaman.index') }}">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection