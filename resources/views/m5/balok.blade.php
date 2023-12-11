<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Minggu 05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h2>MENGHITUNG VOLUME BALOK</h2>
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
              <form method="POST" action="{{ route('m5.balok.action')}}">
                    @csrf
                    <div class="mb-3">
                        <label>Panjang</label>
                        <input type="text" class="form-control" name="panjang" value="{{old('panjang')}}" />
                    </div>
                    <div class="mb-3">
                        <label>Lebar</label>
                        <input type="text" class="form-control" name="lebar" value="{{old('lebar')}}" />
                    </div>
                    <div class="mb-3">
                        <label>Tinggi</label>
                        <input type="text" class="form-control" name="tinggi" value="{{old('tinggi')}}" />
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