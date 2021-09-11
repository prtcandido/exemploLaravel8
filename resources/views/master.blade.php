<!-- View Master - Base para outras View construidas por extenção desta. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('titulo')</title>

	<!-- Bootstrap
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
	-->
	<link rel="stylesheet" href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://getbootstrap.com.br/docs/4.1/examples/dashboard/dashboard.css">

</head>
<body>
	<!-- INICIO DO CABEÇALHO DA PÁGINA -->
	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Tópicos Especiais de Informática</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sair</a>
        </li>
      </ul>
    </nav>
	<!-- FIM DO CABEÇALHO DA PÁGINA -->

	<div class="container-fluid">
		<div class="row">
			<!-- INICIO DO MENU LATERAL -->
			<nav class="col-md-2 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link" href="/" >
							<span data-feather="home"></span>
							Principal
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="/departamento">
							<span data-feather="file"></span>
							Departamentos
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- FIM DO MENU LATERAL -->

			<!-- INICIO DO CONTEÚDO DA PÁGINA -->
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
				<!-- As views filhas incluem conteúdo aqui e no outro Arrobayield acima -->
				@yield('corpo')
			</main>
			<!-- FIM DO CTEÚDO DA PÁGINA --> 
		</div>
	</div>

	<!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com.br/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com.br/docs/4.1/dist/js/bootstrap.min.js"></script>

    <!-- Ícones -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>