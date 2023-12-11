<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto mt-5">
                <form method="POST" action="{{ route('user.login.action') }}">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            {{ $title }}
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-info">
                                    <ul>
                                        @foreach ($errors->all() as $err)
                                        <li>{{ $err }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="mb-3">
                                <input class="form-control" type="text" placeholder="Username"
                                name="username" />
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <input class="form-control" type="password" placeholder="Password"
                                name="password" />
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary w-100">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
     crossorigin="anonymous"></script>
</body>
</html>