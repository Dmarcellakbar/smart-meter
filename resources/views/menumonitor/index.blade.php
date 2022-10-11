@extends('layouts.main')

@section('container')
<h1>Monitoring Smart Meter</h1>

<a href="/monitor" class="btn btn-primary mb-3">
    Back to Menu
</a>

<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">Energy Data</div>
      <div class="card-body table-responsive">
      <table class="table table-warning table-striped table-hover ">
        <tr>
            <th>SmartMeterID</th>
            <th>StartDate</th>
            <th>EndDate</th>
            <th>Voltage(V)</th>
            <th>Current(A)</th>
            <th>Power(W)</th>
            <th>Frequency(F)</th>
            <th>Energy(E)</th>
            <th>PowerFactor</th>
            <th>Energy Source</th>
        </tr>
        @foreach ($data_units as $item)
        <tr>
            <td>{{$item['SmartMeterID']}}</td>  
            <td>{{$item['tanggalTerima']}}</td>  
            <td>{{$item['tanggalKirim']}}</td>  
            <td>{{$item['Tegangan']}}</td>
            <td>{{$item['Arus']}}</td>
            <td>{{$item['Daya']}}</td>
            <td>{{$item['Frekuensi']}}</td>
            <td>{{$item['Energi']}}</td>
            <td>{{$item['PowerFactor']}}</td>
            <td>{{$item['SumberEnergi']}}</td>
        </tr>
        @endforeach
        
      </table>
    </div>
    </div>
    </div>
    </div>
  </div>

  

@endsection
{{-- 
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var userData = <?php echo json_encode($data_units['Tegangan'])?>;
    Highcharts.chart('container', {
        title: {
            text: 'New User Growth, 2020'
        },
        subtitle: {
            text: 'Source: positronx.io'
        },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ]
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Users',
            data: userData
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script> --}}