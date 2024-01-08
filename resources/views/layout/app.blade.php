<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Perpustakaan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
                    </li>
                    @if(Auth::user()->level == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.index')}}"><i class="fa fa-users"></i> User</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('anggota.index')}}"><i class="fa fa-users"></i> Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('buku.index')}}"><i class="fa-solid fa-book"></i> Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('kategori.index')}}"><i class="fa fa-tags"></i> Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('peminjaman.index')}}"><i class="fa-solid fa-file"></i> Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.password')}}"><i class="fa-solid fa-key"></i> Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.logout')}}"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
      </nav>
      <div class="container">
        <h1>{{ $title}}</h1>
        @yield('content')
      </div>
</body>
</html>