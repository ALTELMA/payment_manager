@extends('layouts.full-width')
@section('content')
	<div class="container">
		<h2>
			<i class="fa fa-Money"></i>&nbsp;Expense Add
			<div class="pull-right">
				<a class="btn btn-success" href="javascript:void(0);" onClick="$('form').submit();"><i class="fa fa-save"></i>&nbsp;Save</a>
				<a class="btn btn-default" href="{{ URL::to('expense') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;Back</a>
			</div>
		</h2>
		<hr>
		@if ($errors->has())
			<div class="alert alert-danger">
				{{ HTML::ul($errors->all()); }}
			</div>
		@endif

		@if(isset($expense))
		{{ Form::model($expense, array('id' => 'form', 'route' => array('expense.update', $expense->id), 'method' => 'PUT')) }}
		@else
		{{ Form::open(array('id' => 'form','class' => 'form', 'role' => 'form','url' => 'expense')) }}
		@endif
			<div class="form-group">
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('category', 'Category') }}
				{{ Form::select('category', array('' => '-- Select Category --') + Category::lists('name','id'), null, array('class' => 'form-control')); }}
			</div>
			<div class="form-group">
				{{ Form::label('value', 'Value') }}
				{{ Form::text('value', Input::old('value'), array('class' => 'form-control')) }}
			</div>
		{{ Form::close() }}
	</div>
@stop