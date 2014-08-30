@extends('layouts.full-width')
@section('content')
	<div class="container">
		<h2>
			<i class="fa fa-bank"></i>&nbsp;Income List 
			<a class="btn btn-primary pull-right" href="{{ URL::to('income') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;Back</a>
		</h2>
		<hr>
		{{ Form::open(array('class' => 'form', 'role' => 'form','url' => 'income')) }}
			<div class="form-group">
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
			</div>
		{{ Form::close() }}
	</div>
@stop