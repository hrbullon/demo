
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Iniciar Sesión</title>
    <!-- Bootstrap core CSS -->
		<link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/login.css');?>" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" method="post" action="<?php echo base_url('auth/verify_login');?>">
		<h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
	    <label for="inputEmail" class="sr-only">Usuario/Correo Electrónico</label>
  			<input type="email" autocomplete="off" class="form-control" placeholder="Correo Electrónico" required autofocus>
  			<label  class="sr-only">Contraseña</label>
  			<input type="password" autocomplete="off" class="form-control" placeholder="*******" required>
  		<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  		<p class="mt-5 mb-3 text-muted">&copy; <?php echo date('Y');?></p>
	</form>
</body>
</html>
