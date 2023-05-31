<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximun-scale=1.0, minimun-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

</head>
<body>
	<header>
		<div class="contenedor">
			<div class="logo izquierda">
				<p><a href="<?php echo RUTA; ?>">Mi primer blog</a></p>
			</div>

			<div class="derecha">
				<form action="<?php echo RUTA;?>/buscar.php" method="get" name="busqueda" class="buscar">
					<input type="text" name="busqueda" placeholder="Buscar">
					<button type="submit" class="icono fa fa-search"></button>
				</form>
				
				<nav class="menu">
					<ul>
						<li>
							<a href="https://twitter.com/VGAMA02" target="_blank"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="https://www.facebook.com/GKOKOV1/photos/?ref=page_internal" target="_blank"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#">Contacto<i class="icono fa fa-envelope"></i></a></li>
						<li>
							<a href="login.php">Login</a>
						</li>
					</ul>
				</nav>
			</div>
			
		</div>
	</header>