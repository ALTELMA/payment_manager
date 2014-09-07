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
		var lineChartData = {
			labels : <?php print_r($report_label);?>,
			datasets : [
			{
				label: "My First dataset",
				fillColor : "rgba(220,220,220,0.2)",
				strokeColor : "rgba(220,220,220,1)",
				pointColor : "rgba(220,220,220,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(220,220,220,1)",
				data : <?php print_r($report_income_data);?>
			},
			{
				label: "My Second dataset",
				fillColor : "rgba(151,187,205,0.2)",
				strokeColor : "rgba(151,187,205,1)",
				pointColor : "rgba(151,187,205,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(151,187,205,1)",
				data : <?php print_r($report_expense_data);?>
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
				<th class="text-center">Income</th>
				<th class="text-center">Expense</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($income_report as $key => $value)
			<tr>
				<td class="col-lg-6">{{ $value->month }}</td>
				<td class="col-lg-3 text-center">{{ number_format($value->total_income) }}</td>
				<td class="col-lg-3 text-center">{{ number_format($value->total_expense) }}</td>
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