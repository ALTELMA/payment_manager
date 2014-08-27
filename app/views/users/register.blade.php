@extends('layouts.default')
@section('content')
	<div class="container">
		<h2>Register</h2>
		{{Form::open(array('class' => 'form form-register','role' => 'form', 'url' => 'user/register'))}}
		<div class="form-grorp">
			{{Form::label('Username')}}
			{{Form::text('username')}}
		</div>
		<div class="form-grorp">
			{{Form::label('Password')}}
			{{Form::password('username')}}
		</div>
		<div class="form-group text-center">
			<button class="btn btn-lg btn-primary">Register</button>
		</div>
		{{Form::close()}}
	</div>
@stop