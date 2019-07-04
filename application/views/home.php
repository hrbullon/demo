
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Inicio</title>
    <!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/home.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/global.css');?>" rel="stylesheet">

	</head>
  <body onload="set_encuesta()">
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

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
		<img src="<?php echo base_url('assets/images/the-palm-962785_1280.jpg');?>"  width="100%" height="100%" alt="" >
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Dubai.</h1>
            <p>Hotel atlantis la palma dubai</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
	  	<img src="<?php echo base_url('assets/images/rio-de-janeiro-1963744_1280.jpg');?>"  width="100%" height="100%" alt="" >
        <div class="container">
          <div class="carousel-caption">
            <h1>Río de Janerio.</h1>
            <p>Maravillosa ciudad de Río de Janeiro en Brasil.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
	  	<img src="<?php echo base_url('assets/images/louvre-102840_1280.jpg');?>"  width="100%" height="100%" alt="" >
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>París</h1>
            <p>Increible píramide louvre.</p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container marketing" id="encuesta">
    <hr class="featurette-divider">
    
    <div class="row featurette" >
			<div class="col-md-6 order-2">
				<h2 class="featurette-heading">Encuesta del día!</h2>
				<form action="<?php echo base_url('home');?>" method="POST">
						<div class="form-group <?php echo (form_error('nombre'))? 'form-error' : '';?>">
						<label for="nombre">Nombre</label>
						<input type="text" id="nombre" name="nombre" value="<?php echo set_value('nombre');?>" class="form-control" placeholder="Ingresa tu nombre">
						<?php echo form_error('nombre');?>
					</div>
					<div class="form-group <?php echo (form_error('apellido'))? 'form-error' : '';?>">
						<label for="apellido">Apellido</label>
						<input type="text" id="apellido" name="apellido" value="<?php echo set_value('apellido');?>" class="form-control" placeholder="Ingresa tu apellido">
						<?php echo form_error('apellido');?>
					</div>
					<div class="form-group <?php echo (form_error('lugares_conocidos'))? 'form-error' : '';?>">
						<label for="lugares_conocidos">Lugares conocidos</label>
						<input type="text" id="lugares_conocidos" name="lugares_conocidos" value="<?php echo set_value('lugares_conocidos');?>" class="form-control" placeholder="Lugares que has conocido">
						<?php echo form_error('lugares_conocidos');?>
					</div>
					<div class="form-group <?php echo (form_error('lugares_conocer'))? 'form-error' : '';?>">
						<label for="lugares_conocer">Lugares por conocer</label>
						<input type="text" id="lugares_conocer" name="lugares_conocer" value="<?php echo set_value('lugares_conocer');?>"  class="form-control" placeholder="Lugares que te gustaría conocer">
						<?php echo form_error('lugares_conocer');?>
					</div>
					<div class="form-group <?php echo (form_error('transporte'))? 'form-error' : '';?> ">
						<label for="transporte">En que prefieres viajar?</label>
						<select name="transporte" class="form-control">
							<option value="">Seleccione una opción</option>
							<option value="Tren">Tren</option>
							<option value="Avión">Avión</option>
							<option value="Barco">Barco</option>  
						</select>			
						<?php echo form_error('transporte');?>
					</div>
					<button type="submit" class="btn btn-success">Enviar</button>
				</form>
			</div>
      <div class="col-md-6 order-1">
				<img src="<?php echo base_url('assets/images/holiday-2880261_640.jpg');?>" width="500" height="500" alt="">
      </div>
    </div>
    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->
  </div><!-- /.container -->

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Ir hacia arriba</a></p>
    <p>&copy; <?php echo date('Y');?> </p>
  </footer>
</main>
<script src="<?php echo base_url('assets/plugins/jquery/jquery-3.3.1.slim.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script></body>
<?php $errors = (validation_errors() !== "")? "encuesta" : "";?>
<script>
	function set_encuesta(){
			var encuesta = <?php echo json_encode($errors);?>;
			
			if(encuesta == "encuesta"){
					
					var split = window.location.href.split("/");
					var x = 0;

					$(".form-error input").each(function () { 
						 if(x == 0){
							 $(this).focus();
							 x = 1;
						 }
					});
			}
	}
</script>
</html>
