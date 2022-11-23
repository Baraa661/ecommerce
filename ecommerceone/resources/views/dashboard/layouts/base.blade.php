<!doctype html>
<html lang="en">
  <head>
  	<title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
  </head>
  <body>
		
		<div class="container-fluid d-flex align-items-stretch">
			<nav id="sidebar" class="img" style="background-image: url(images/bg_1.jpg);">
				<div class="p-4">
		  			<h1><a href="{{url('private')}}" class="logo">Dashboard</a></h1>
	        		<ul class="list-unstyled components mb-5">
						<li>
							<a href="{{url('products')}}"> Products </a>
						</li>
						<li>
							<a href="{{url('categories')}}"> Categories </a>
						</li>
						<li>
							<a href="{{url('users')}}"> Users </a>
						</li>
	        		</ul>

	       

	        

	      		</div>
    		</nav>

       		 @yield('private')

		</div>
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/popper.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
  </body>
</html>