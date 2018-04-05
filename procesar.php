<!DOCTYPE HTML>

<html>
	<head>
		<title>Contacto</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div id="logo-wrapper">
				<div class="container">
						
					<!-- Logo -->
						<div id="logo">
							<h1><a href="#">Perfil Personal</a></h1>
							<span>ADSI 1354951</span>
						</div>
					
				</div>
			</div>			
			<div class="container">
				<!-- Nav -->
					<nav id="nav">
						<ul>
							
							<li class="active"><a href="index.html">Inicio</a></li>
							<li class="active"><a href="Perfil.html">Perfil</a></li>
							<li class="active"><a href="Contacto.html">Contacto</a></li>

							
						</ul>
					</nav>
			</div>
		</div>
	<!-- Header -->
		
	<!-- Banner -->
		<div id="banner">
			<div class="container">
			</div>
		</div>
	<!-- /Banner -->

	<!-- Main -->
		<div id="main">

			<!-- Main Content -->
			<div class="container">
				<div class="row">
				
					<div class="9u skel-cell-important">
						<section>
							<header>
								<h2 align="center">Contacto</h2>

								<div>
								<?php 

function textoValidacion($variable){
	if (ctype_alpha($variable) && !empty($variable)) {
		echo $variable;
	}elseif(!empty($variable)  && !ctype_alpha($variable)){
		header("Location: Contacto.html");
}
}

function numV($variable){
	if (is_numeric($variable ) && !empty($variable)) {
		if ($variable >0) {
			echo $variable;
		}elseif (empty($variable)) {
			header("Location: Contacto.html");
		}
	}
}

function emailV ($variable){
	if (isset($variable)&& !empty($variable) && filter_var($variable, FILTER_VALIDATE_EMAIL)) {
		echo "Correo: $variable";
	} elseif (empty($variable)){
		header("Location: Contacto.html");
	
	}
}

function validarTextarea($variable){
	if (isset($variable) && !empty($variable)) {
		echo "COMENTARIO: $variable";
	} elseif (empty($variable)) {
		echo "NO PUEDE ESTAR VACIO";
	}
}


if (isset($_GET['Nombre'])) {echo "Nombre: "; echo textoValidacion($_GET['Nombre']);echo "<br>";};
if (isset($_GET['Apellido'])) {echo "Apellido: "; echo textoValidacion($_GET['Apellido']);echo "<br>";};
if (isset($_GET['Telefono'])) {echo "Telefono: "; echo numV($_GET['Telefono']);echo "<br>";};
if (isset($_GET['Direccion_De_Correo'])) {echo emailV($_GET['Direccion_De_Correo']);echo "<br>";}

if (isset($_GET['Comentario'])) {echo validarTextarea($_GET['Comentario']);echo "<br>";}
 ?>
								</div>
							</header>
							
							
						</section>
					</div>

					
	<!-- /Main -->

	<!-- Footer -->
	
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<section>
					Design: <a href="http://templated.co">JENI GOMEZ</a> 
				</section>
			</div>
		</div>


	</body>
</html>
