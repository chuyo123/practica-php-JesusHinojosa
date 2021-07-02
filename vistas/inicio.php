	<?php 
		session_start();
		if(isset($_SESSION['usuario'])){
			
	 ?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>inicio</title>
		<?php require_once "menu.php"; ?>
		<link rel="stylesheet" type="text/css" href="../css/menus.css">
	</head>
	<body>
		<br><br><br><br>
	<h3 class="desc" style="font-family:Calibri;">
	Las Fiestas de Octubre es un festival cultural y recreativo llevado a cabo en el estado de Jalisco con sede principal en la capital Guadalajara. Comienzan el primer viernes de Octubre hasta el primer lunes de Noviembre; se lleva a cabo en el Auditorio Benito Juárez, en diferentes localizaciones de la ciudad y en distintas regiones del estado de Jalisco. Dichas fiestas nacen en 1965 y se consideran una de las expresiones culturales más tradicionales en el estado.
	<br>
	Durante todo el mes se presentan diferentes expresiones artísticas como conciertos de artistas de renombre nacional e internacional, muestras de danza, jornadas de cine, exhibiciones de pintura, ballet, talleres y el tradicional palenque, donde además de los conciertos se pueden apreciar las peleas de gallos. Los juegos mecánicos, los antojitos mexicanos, las exposiciones y venta de productos artesanales e industriales, Expo Ganadera y actividades deportivas son otras de las cosas que se pueden encontrar en estas tradicionales fiestas que buscan incentivar la cultura y el turismo de Guadalajara.
	</h3>

	<div class="borde">
		<img src="../archivos/rueda.jpg" width="200" height="200">
		<img src="../archivos/carrusel1.jpg" width="200" height="200">
		<img src="../archivos/montaña.jpg" width="200" height="200">
		
	</div>

	</body>
	</html>

	<?php 
		}else{
			header("location:../index.php");
		}
	 ?>

	 <style>
	 	.desc	{
	  border: 2px;
	  margin: 20px;
	}
		.borde	{
	  display: flex;
	  width: 100vw;
	  height: 305px;
	  margin-top: 1px;
	  justify-content: center;
	  align-items: center;
	}

	.borde img{
		margin: 0 20px;
		object-fit: cover;
	}
	 </style>