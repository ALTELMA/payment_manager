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
		<a class="navbar-brand" href="{{ URL::to('nerds') }}">Income Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('income') }}">View All Income</a></li>
		<li><a href="{{ URL::to('income/create') }}">Add Income</a>
	</ul>
</nav>

<h1>Showing {{ $income->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $income->name }}</h2>
		<p>
			<strong>Email:</strong> {{ $income->name }}<br>
			<strong>Level:</strong> {{ $income->value }}
		</p>
	</div>

</div>
</body>
</html>