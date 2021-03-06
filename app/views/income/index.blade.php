@extends('layouts.full-width')
@section('content')
	<div class="container">
		<h2>
			<i class="fa fa-bank"></i>&nbsp;Income List 
			<a class="btn btn-success pull-right" href="{{ URL::to('income/create') }}"><i class="fa fa-plus"></i>&nbsp;Add</a>
		</h2>
		@if($incomes->count())
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Title</th>
					<th>Value</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($incomes as $key => $value)
				<tr>
					<td class="col-lg-8">{{ $value->title }}</td>
					<td class="col-lg-3">{{ number_format($value->value) }}</td>
					<td class="col-lg-1 text-center">
						{{ Form::open(array('url' => 'income/' . $value->id)) }}
							{{ Form::hidden('_method', 'DELETE') }}
							<a href="{{ URL::to('income/' . $value->id . '/edit') }}"><i class="fa fa-pencil-square-o fa-lg"></i></a>
							<a href="javascript:void(0);" onCLick="$(this).parents().submit();"><i class="fa fa-trash-o fa-lg"></i></a>
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
			</tbody>
			<tfoot>
				<tr>
					<td><strong>Total</strong></td>
					<td class="text-right" colspan="2">{{ number_format($totalValue) }} BATH</td>
				</tr>
			</tfoot>
		</table>
		@else
			<div class="alert alert-info">
				<p class="text-center">No Result.</p>
			</div>
		@endif
	</div>
@stop