{{-- @include('sidebar') --}}
@extends('layouts.main')

@section('container')

<h1>Monitoring Chart</h1>

<a href="/monitor" class="btn btn-primary mb-3">
	Back to Menu
  </a>

<a href="/datalog" class="btn btn-secondary mb-3">
Monitoring Electricy
</a>  
<a href="/tariff" class="btn btn-primary mb-3">
Monitoring Price
</a>
{{-- <div>
	Price Equilibrium = {{ $tarif->tarifStandar*$getdaya->Daya*1000}}
</div> --}}

<div class="content" style="margin-left:15px;margin-right:20px;margin-top:10px;">

	<label for="cars">Select Chart Style</label>
	<select name="chart" onchange="myFunction()" class="form-control" id="chart" style="width:120px;" value="line">
		{{-- <option value="pie">Pie</option> --}}
		{{-- <option value="column">Column</option> --}}
		{{-- <option value="pyramid">Pyramid</option> --}}
		{{-- <option value="bar">Bar</option> --}}
		<option value="line">Click Here</option>
		<option value="line">Line</option>
	</select>

    {{--  Chart Out Put is printinh here  --}}
	
	<div class="product-index" align="right" style="margin-top:40px;">
		<div id="chartContainer" style="height: 370px; width: 100%;"></div>
	</div>
	<div style="margin-bottom: 20%"></div>

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
		text: "Chart"
	}],
	data: [
		{
	    type:chartType, //"column",  type: "pie",
		name: "Main Grid",
		showInLegend: true,
		yValueFormatString: "#,##0.\"\"",
		indexLabel: "({y})",
		dataPoints:  <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
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