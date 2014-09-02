@extends('layouts.full-width')
@section('content')
	<div class="container">
		<h2>
			<i class="fa fa-bank"></i>&nbsp;Income Add
			<div class="pull-right">
				<a class="btn btn-success" href="javascript:void(0);" onClick="$('form').submit();"><i class="fa fa-save"></i>&nbsp;Save</a>
				<a class="btn btn-default" href="{{ URL::to('income') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;Back</a>
			</div>
		</h2>
		<hr>
		@if ($errors->has())
			<div class="alert alert-danger">
				{{ HTML::ul($errors->all()); }}
			</div>
		@endif

		@if(isset($income))
		{{ Form::model($income, array('id' => 'form', 'route' => array('income.update', $income->id), 'method' => 'PUT')) }}
		@else
		{{ Form::open(array('id' => 'form','class' => 'form', 'role' => 'form','url' => 'income')) }}
		@endif
			<div class="form-group">
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('description', 'Description') }}
				{{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('value', 'Value') }}
				{{ Form::text('value', Input::old('value'), array('class' => 'form-control')) }}
			</div>
		{{ Form::close() }}
	</div>
@stop