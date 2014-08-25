@extends('layouts.default')
@section('content')
	<div class="container">
		<div id="login-box">
			{{Form::open(array('role' => 'form', 'url' => 'user/login'))}}
			<h1>Login</h1>
			<hr>
			<div class="form-group">
				{{Form::label('username','Username', array('class' => 'control-label'))}}
				{{Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => 'username'))}}
			</div>
			<div class="form-group">
				{{Form::label('username','Username', array('class' => 'control-label'))}}
				{{Form::password('password', array('class' => 'form-control', 'placeholder' => 'password'))}}
			</div>
			{{Form::close()}}
		</div>
	</div>
@stop