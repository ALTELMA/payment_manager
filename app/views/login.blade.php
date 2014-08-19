@extends('layout/template')

@section('content')
{{ Form::open(array('url' => 'login')) }}
{{ Form::label('E-mail', 'E-mail : ') }}
{{ Form::text('email' ) }}
{{ Form::label('password', 'Password : ') }}
{{ Form::password('password') }}
{{ Form::submit('Login') }}
{{ Form::close() }}
@stop
