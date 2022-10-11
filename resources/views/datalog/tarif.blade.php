{{-- @include('sidebar') --}}
@extends('layouts.main')

@section('container')

<h1>Monitoring Tarif Chart</h1>

<a href="/monitor" class="btn btn-primary mb-3">
	Kembali
  </a>

<a href="/datalog" class="btn btn-primary mb-3">
Monitoring Daya
</a>  
<a href="/tariff" class="btn btn-secondary mb-3">
Monitoring Tarifs
</a>

<div class="content" style="margin-left:15px;margin-right:20px;margin-top:10px;">

	<label for="cars">Select Chart Style</label>
	<select name="chart" onchange="myFunction()" class="form-control" id="chart" style="width:120px;">
		<option value="pie">Pie</option>
		<option value="column">Column</option>
		<option value="pyramid">Pyramid</option>
		<option value="bar">Bar</option>
		<option value="line">Line</option>
	</select>

    {{--  Chart Out Put is printinh here  --}}
	
	<div class="product-index" align="right" style="margin-top:40px;">
		<div id="chartContainer" style="height: 370px; width: 100%;"></div>
	</div>

	<div>
		
	</div>

</div>
  



<script>

function myFunction() 
{
  var chartType = document.getElementById("chart").value;

  var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	// theme: "light2",
	title: {
		text: "Smart Meter"
	},
	subtitles: [{
		text: "Chart JS"
	}],
	data: [
		{
	    type:chartType, //"column",  type: "pie",
		name: "Main Grid",
		showInLegend: true,
		yValueFormatString: "#,##0.\"\"",
		indexLabel: "({y})",
		dataPoints:  <?php echo json_encode($data*$data3, JSON_NUMERIC_CHECK); ?>
	},
	{
	    type:chartType, //"column",  type: "pie",
		name: "Micro Grid",
		showInLegend: true,
		yValueFormatString: "#,##0.\"\"",
		indexLabel: "({y})",
		dataPoints:  <?php echo json_encode($data2, JSON_NUMERIC_CHECK); ?>
	},

]
});
chart.render();
}

// window.onload = function() {

 
// }
</script>
<body>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

@endsection