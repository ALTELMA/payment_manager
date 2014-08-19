<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	{{ HTML::style(asset('assets/css/styles.css')) }}
</head>
<body>
	<header>
		
	</header>

	<section id="content">
		<div class="container">
			@yield('content')
		</div>
	</section>

	<footer>
		
	</footer>
</body>
</html>