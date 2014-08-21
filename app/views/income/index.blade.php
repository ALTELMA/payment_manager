<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo asset('assets/css/styles.css');?>">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ URL::to('income') }}">Nerd Alert</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="{{ URL::to('income') }}">View All Income</a></li>
				<li><a href="{{ URL::to('income/create') }}">Add Income</a><li>
			</ul>
		</nav>

		<h1>Income :: List</h1>

		<!-- will be used to show any messages -->
		@if (Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif

		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Name</td>
					<td>Value</td>
					<td>Actions</td>
				</tr>
			</thead>
			<tbody>
				@foreach($incomes as $key => $value)
				<tr>
					<td>{{ $value->id }}</td>
					<td>{{ $value->name }}</td>
					<td>{{ $value->value }}</td>

					<!-- we will also add show, edit, and delete buttons -->
					<td>

						<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
						<!-- we will add this later since its a little more complicated than the other two buttons -->
						{{ Form::open(array('url' => 'income/' . $value->id, 'class' => 'pull-right')) }}
						{{ Form::hidden('_method', 'DELETE') }}
						{{ Form::submit('Delete this income', array('class' => 'btn btn-warning')) }}
						{{ Form::close() }}

						<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
						<a class="btn btn-small btn-success" href="{{ URL::to('income/' . $value->id) }}">View</a>

						<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
						<a class="btn btn-small btn-info" href="{{ URL::to('income/' . $value->id . '/edit') }}">Edit</a>

					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</body>
</html>