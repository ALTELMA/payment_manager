@extends('layouts.full-width')
@section('content')
<div class="container">
	<h2><i class="fa fa-bar-chart"></i>&nbsp;Report</h2>
	@if($income_report->count())

	<!-- graph -->
	<div>
		<canvas id="canvas" height="100"></canvas>
	</div>
	<script>
		var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
		var lineChartData = {
			labels : ["January","February","March","April","May","June","July"],
			datasets : [
			{
				label: "My First dataset",
				fillColor : "rgba(220,220,220,0.2)",
				strokeColor : "rgba(220,220,220,1)",
				pointColor : "rgba(220,220,220,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(220,220,220,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			},
			{
				label: "My Second dataset",
				fillColor : "rgba(151,187,205,0.2)",
				strokeColor : "rgba(151,187,205,1)",
				pointColor : "rgba(151,187,205,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(151,187,205,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			}
			]

		}

		window.onload = function(){
			var ctx = document.getElementById("canvas").getContext("2d");
			window.myLine = new Chart(ctx).Line(lineChartData, {
				responsive: true
			});
		}

	</script><!-- end graph -->

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>Value</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($income_report as $key => $value)
			<tr>
				<td class="col-lg-8">{{ $value->month }}</td>
				<td class="col-lg-3">{{ number_format($value->value) }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@else
	<div class="alert alert-info">
		<p class="text-center">No Result.</p>
	</div>
	@endif
</div>
@stop