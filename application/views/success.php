<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Encuesta registrada</title>
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<header>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="<?php echo base_url()?>">Inicio</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
			</li>
		</ul>
			<a href="<?php echo  base_url('auth/login');?>" class="btn btn-outline-success my-2 my-sm-0">Iniciar Sesión</a>
		</div>
	</nav>
	</header>
	<div class="jumbotron text-center" style="background-color: #8fe58f;">
		<h1 class="display-3">Encuesta registrada</h1>
		<p class="lead">Satisfactoriamente</p>
		<hr class="my-2">
	</div>
</body>
</html>
