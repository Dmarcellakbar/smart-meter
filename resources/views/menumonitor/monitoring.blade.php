@extends('layouts.main')

@section('container')
<h1>Analyst Price Smart Meter</h1>
<a href="/monitor" class="btn btn-primary mb-3">
    Back to Menu
  </a>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">Analyst Supply Demand</div>
      <div class="card-body table-responsive">
<table class="table table-warning table-striped table-hover ">
    <tr>
        <th>Pattern</th>
        <th>Power Group</th>
        <th>Tariff</th>
        <th>Standart Deviation</th>

    </tr>
    @foreach ($data_tarifs as $item)
    <tr>
        <td>{{$item['Pattern']}}</td>  
        <td>{{$item['PowerGroup']}}</td>  
        <td>{{$item['Tariff']}}</td>
        <td>{{$item['StandarDeviasi']}}</td>
    </tr>
    @endforeach
    
  </table>
  <table class="table table-striped table-hover table-sm ">
    <tr>
        <td>Descriptions:<br/>
            QS=QD<br/>
            QS = the quantity of supply, QD = the quantity of demand
        </td>
        <td>Supply: Main Grid (MG) + Micro Grid (uG)<br/>
            Power Group (Rupiah Currency): <br/>
            Group I = Tariff Rp. 1800, <br/>
            Group II = Tariff of Rp. 1600, <br/>
            Group III = Tariff of Rp. 1300
        </td>
    </tr>
</table>


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