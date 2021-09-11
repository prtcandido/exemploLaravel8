<!-- View Master - Base para outras View construidas por extenção desta. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('titulo')</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

	<style type="text/css">
		.page-item {color: green;}
		.active {color: green;}
	</style>

</head>
<body>

	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <a class="navbar-brand" href="/">Home</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="/departamento">Departamento</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/funcionario">Funcionario</a>
	      </li>  
	    </ul>
	  </div>  
	</nav>

	<!-- As views filhas incluem conteúdo aqui e no outro Arrobayield acima -->
	@yield('corpo')
</body>
</html>