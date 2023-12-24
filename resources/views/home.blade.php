@extends('layout.app')
@section('content')
    @auth
    <p>Selamat Datang <b>{{Auth :: user()->nama_user}}</b></p>
    @endauth
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-header">
                    <i class="fa fa-users"></i>
                </div>
                <div class="card-body">
                    <h3>{{ $jumlah_user }} data user</h3>
                </div>
                <div class="card-footer text-md">
                    <a href="#" class="text-white text-decoration-none">Selengkapnya 
                        $raquo;</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-header">
                    <i class="fa fa-users"></i> Total Peminjaman
                </div>
                <div class="card-body">
                    <h3>{{ number_format($total_peminjaman,0,',','.') }}</h3>
                </div>
                <div class="card-footer text-md">
                    <a href="#" class="text-white text-decoration-none">Selengkapnya 
                        $raquo;</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container123"></div>
    <p class="highcharts-description">
        This chart shows how data labels can be added to the data series. This
        can increase readability and comprehension for small datasets.
    </p>
</figure>

<script>
// Data retrieved https://en.wikipedia.org/wiki/List_of_cities_by_average_temperature
Highcharts.chart('container123', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Grafik peminjaman 30 Hari terakhir'
    },
    xAxis: {
        categories: <?= json_encode($categories); ?>
    },
    yAxis: {
        title: {
            text: 'TOTAL'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Peminjaman',
        data: <?= json_encode($data); ?>
    }]
});

</script>

@endsection
