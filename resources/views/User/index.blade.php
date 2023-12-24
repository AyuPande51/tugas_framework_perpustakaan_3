@extends('layout.app')
@section('content')

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
            <?php $no = 1; ?>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $user->nama_user }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->telp }}</td>
                    <td>{{ $user->level }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection