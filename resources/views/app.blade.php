
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta id="token" name="token" value="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>redditto | a clone of the front page of the internet</title>

	<link href="/css/materialize.css" rel="stylesheet">
	<link href="/css/app.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="blue accent-1 lighten-2" role="navigation">
	    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">redditto</a>
	     	<ul class="right hide-on-med-and-down">
	        	<li><a href="#">Navbar Link</a></li>
	      	</ul>

		    <ul id="nav-mobile" class="side-nav">
		        <li><a href="#">Navbar Link</a></li>
	      	</ul>
	      	<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">|||</i></a>
	    </div>
 	</nav>

	<div class="container">
		<div class="section">
			<div class="col s12">
				@yield('content')
			</div>
		</div>
	</div>

	<footer>
		
	</footer>
	

	<script src="/js/bundle.js"></script>
</body>
</html>
