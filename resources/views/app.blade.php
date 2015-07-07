<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> @yield('title') | Fupre Graduate Directory</title>

	<link href="{{ asset('/css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href=" {{ asset('/css/bootstrap/css/styles.css') }} ">


	<!-- Fonts -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
	  <div class="container">
	    <div class="navbar-header">
	      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	     <a href="/" class="navbar-brand">Fupre Graduates Directory</a>
	    </div>
	    <nav class="collapse navbar-collapse" role="navigation">

	    </nav>
	  </div>
	</header>

	<div id="masthead">  
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12">
	        <div class="well well-lg"> 
	          <div class="row">
	            <div class="col-sm-12">
	              <h1>Fupre Graduates Directory
	                <p class="lead"></p>
	              </h1>
				
	            </div>
	          </div>
	        </div>
	      </div>
	    </div> 
	  </div><!-- /cont -->
	  
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12">
	        <div class="top-spacer"> </div>
	      </div>
	    </div> 
	  </div><!-- /cont -->
	  
	</div>

	@if(Session::has('global'))
		<div class="alert alert-info alert-dismissible" role="alert"> 
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			 <span aria-hidden="true">&times;</span></button>
			<strong> {{ Session::get('global') }}. </strong> <br><br>
		</div>
	@endif

	@yield('content')


	<hr>

	<div class="container" id="footer">

	</div>

	<hr>

	<hr>

	<footer>
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12">
	          <p class="pull-right"> <h3> <strong>Fupre Graduates Directory &copy 2015</strong> </h3> </p>      
	      </div>
	    </div>
	  </div>
	</footer>

	<!-- Scripts -->
	<script src="{{ asset('/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/css/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
