@extends('layouts.default')
@section('content')
	<div class="container">
		<h2><i class="fa fa-user"></i>&nbsp;Register</h2>
		<hr>
		@if ($errors->has())
			<div class="alert alert-danger">
				{{ HTML::ul($errors->all()) }}
			</div>
		@endif
		{{ Form::open(array('class' => 'form form-register','role' => 'form', 'url' => 'user')) }}
		<div class="form-group">
			{{ Form::label('username','Username') }}
			{{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('password','Password') }}
			{{ Form::password('password', array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('email','Email') }}
			{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
		</div>
		<div class="form-group text-center">
			<button class="btn btn-lg btn-primary">Register</button>
		</div>
		{{ Form::close() }}
	</div>
@stop