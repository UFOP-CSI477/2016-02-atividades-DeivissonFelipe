<!DOCTYPE html>
<html>
<head>
	<title>Prova Web I</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<script src="/js/jquery-3.1.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<style>
	   .error{
	         color:red
	   }
		/* Remove the navbar's default margin-bottom and rounded borders */ 
	    .navbar {
	      margin-bottom: 0;
	      border-radius: 0;
	    }
	   
	    /* Set gray background color and 100% height */
	    .sidenav {
	      padding-top: 20px;
	      background-color: #f1f1f1;
	      height: 100%;
	    }
	    
	    /* Set black background color, white text and some padding */
	    footer {
	      background-color: #555;
	      color: white;
	      padding: 15px;
	      height: 50px;
	    }
   
	</style>
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
	<div id="container">
		<div id="header">
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="/">SisProvas</a>
			    </div>
			    <ul class="nav navbar-nav">
			    
					<li><a href="/eventos">Área Geral</a></li>
					<li><a href="/atletas">Atletas</a></li>
					<li><a href="/admin">Administração</a></li>
			
			    </ul>

			  </div>
			</nav>
		</div>
		<div id="content">

			@yield('content')
			<br><br><br><br>
		</div>

		<footer class="container-fluid text-center navbar-fixed-bottom">
		  <p>Correção de Prova I - Sistema Web - Deivisson Felipe da Silva</p>
		</footer>
	</div>

</body>
</html>
