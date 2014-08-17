{{ Form::open(array('url' => 'login')) }}
{{ Form::label('username', 'Username : ') }}
{{ Form::text('username' ) }}
{{ Form::label('password', 'Password : ') }}
{{ Form::password('passowrd') }}
{{ Form::submit('Login') }}
{{ Form::close() }}