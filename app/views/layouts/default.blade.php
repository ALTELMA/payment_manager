<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<?php echo HTML::Style('assets/css/styles.css');?>
	<?php echo HTML::Style('assets/css/font-awesome.min.css');?>

	<!-- Script -->
	<?php echo HTML::Script('assets/js/jquery.js');?>
	<?php echo HTML::Script('assets/js/bootstrap.js');?>
</head>
<body>
	<div id="content">
		@yield('content')
	</div>
</body>
</html>