@extends('layouts.full-width')
@section('content')
	<div class="container">
		<h2>
			<i class="fa fa-bank"></i>&nbsp;Income List 
			<a class="btn btn-success pull-right" href="{{ URL::to('income/create') }}"><i class="fa fa-plus"></i>&nbsp;Add</a>
		</h2>
		@if($incomes->count())
			@foreach ($incomes as $key => $value)
				
			@endforeach
		@else
			<div class="alert alert-info">
				<p class="text-center">No Result.</p>
			</div>
		@endif
	</div>
@stop