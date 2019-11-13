<!DOCTYPE html>
<html lang="es">
<head>

	<title>Bienvenido a SAREDA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- LIBRERIAS BOOTSTRAP-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  href="assets/stylesheets/application.css" >
	<!-- jQuery library -->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<header>
	<?php 
		require_once('header.php');
	?>	
</header>

<section>	
	<div class="container">
	<?php 
			// carga el archivo routing.php para direccionar a la página .php que se incrustará entre la header y el footer
			require_once('routes.php');
	 ?>

	</div>
</section>


</body>
</html>