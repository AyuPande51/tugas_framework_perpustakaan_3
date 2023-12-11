<body>
    <h2>MENGHITUNG LUAS SEGITIGA</h2>
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
              <form method="POST" action="{{ route('m5.segitiga.action')}}">
                    @csrf
                    <div class="mb-3">
                        <label>Alas</label>
                        <input type="text" class="form-control" name="alas" value="{{old('alas')}}" />
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