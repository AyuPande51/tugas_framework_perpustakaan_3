<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minggu 05: Latihan 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
              @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $err)
                          <li>{{$err}}</li>
                      @endforeach
                    </ul>
                  </div>
              @endif
              <form method="POST" action="{{ route('m5.lat2.action')}}">
                    @csrf
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{old('nama')}}" />
                    </div>
                    <div class="mb-3">
                        <label>Nilai</label>
                        <input type="text" class="form-control" name="nilai" value="{{old('nilai')}}" />
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
              </form>
            </div>
        </div>
    </div>
</body>
</html>