@extends('crudbooster::admin_template')
@section('content')


<div id="box-statistic" class="row">
    <div class="box-header">
        <div class="col-sm-4">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$member}}</h3>

                    <p>Member</p>
                </div>
                <div class="icon">
                    <i class="fa fa-money"></i>
                </div>
            </div>
        </div>

    <div class="col-sm-4">
        <div class="small-box bg-teal">
            <div class="inner">
                <h3>{{$transaksi}}</h3>
                <p>Transaksi</p>
            </div>
            <div class="icon">
                <i class="fa fa-money"></i>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="small-box bg-blue">
            <div class="inner">
                <h3>{{number_format($nominal,0)}}</h3>
                <p>Nominal</p>
            </div>
            <div class="icon">
                <i class="fa fa-money"></i>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md">
        <figure class="highcharts-figure">
            <div id="grafik_transaksi"></div>
        </figure>
    </div>

    
</div>





{{-- Grafik --}}

@push('bottom')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/bullet.js"></script>



<script>

Highcharts.chart('grafik_transaksi', {
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Grafik Transaksi'
        },
        subtitle: {
            text: '{{$nama_lembaga}}'
        },
            credits: {
                enabled: false
            },
        xAxis: {
            categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Donasi'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">Bulan {point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}  </td><td style="color:{series.color};padding:0">: </td>' +
                '<td style="color:{series.color};padding:0"><b>{point.y}</b>,-</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
          {
              name: 'Transaksi',
              color: "#0073B7",
              data: {!!json_encode($grafik_transaksi)!!}
          }
      ]
});

</script>
@endpush


@endsection