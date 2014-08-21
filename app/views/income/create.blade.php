<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('income') }}">Income Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('income') }}">View All Income</a></li>
		<li><a href="{{ URL::to('income/create') }}">Add Income</a>
	</ul>
</nav>

<h1>Add Income</h1>

<!-- if there are creation errors, they will show here -->
@if ($errors->all())
<div class="alert alert-danger">
	{{ HTML::ul($errors->all()) }}
</div>
@endif

{{ Form::open(array('url' => 'income')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('category', 'Category') }}
		{{ Form::text('category', Input::old('category'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('value', 'Value') }}
		{{ Form::text('value', Input::old('value'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Add Income!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>