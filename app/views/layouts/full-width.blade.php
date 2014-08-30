<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- Style -->
	<?php echo HTML::Style('assets/css/styles.css');?>
	<?php echo HTML::Style('assets/css/font-awesome.min.css');?>

	<!-- Script -->
	<?php echo HTML::Script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');?>
	<?php echo HTML::Script('assets/js/bootstrap.js');?>
</head>
<body>
	<!-- header -->
	<header>
		<!-- navber -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Payment Manager</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ URL::to('user') }}">Payment Manager</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li {{ (Request::is('user') ? 'class=active' : '') }} ><a href="{{ URL::to('user') }}">Dashboard</a></li>
						<li {{ (Request::is('income') ? 'class=active' : '') }} ><a href="{{ URL::to('income') }}">Income</a></li>
						<li {{ (Request::is('expense') ? 'class=active' : '') }} ><a href="{{ URL::to('expense') }}">Expense</a></li>
						<li {{ (Request::is('setting') ? 'class=active' : '') }} <a href="{{ URL::to('setting') }}">Setting</a></li>
					</ul>
				</div>
			</div><!-- end container -->
		</nav><!-- end navbar -->
	</header><!-- end header -->

	<div id="content">
		@yield('content')
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p id="copyright" class="text-right">Payment-Manager@2014 Power by Goatfarmstudios.</p>
				</div>
			</div>
		</div>
	</footer><!-- end footer -->
</body>
</html>