@extends('layouts.default')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			{{Form::open(array('class' => 'form form-login','role' => 'form', 'url' => 'user/login'))}}
			<h2 class="text-center"><i class="fa fa-credit-card"></i>&nbsp;Payment Manager</h2>
			<hr>
			{{Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => 'Username or Email'))}}
			{{Form::password('password', array('class' => 'form-control', 'placeholder' => 'password'))}}
			<div class="checkbox">
				<label>
					<input type="checkbox" name="remember" value="remember-me"> Remember me
				</label>
				<a href="#">[ Forgot ]</a> <a href="{{ URL::to('user/register') }}">[ Register ]</a>
			</div>
			<button class="btn btn-primary btn-block">Login</button>
			{{Form::close()}}
		</div>
	</div>
</div>
@stop