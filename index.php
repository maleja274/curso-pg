<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="coca cola es la bebida que más toman las personas en el mundo">
		<meta name="keywords" content="coca, gaseosa, cola">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			Inicio - Coca cola
		</title>
		<link rel="shortcut icon" href="img/favicon.png">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="style.css">
		<script src="https://kit.fontawesome.com/51ec92631a.js" crossorigin="anonymous"></script>
	</head>	
	<body>
		<header>
			<div class="container">
				<a href="index.html">
					<img src="img/logo.svg" class="logo">
				</a>
				<nav>
					<a href="#inicio">Inicio</a>
					<a href="#nosotros">Nosostros</a>
					<a href="#servicios">Servicios</a>
					<a href="#galeria">Galería</a>
					<a href="#contactenos">Contáctenos</a>
				</nav>
				<a href="#" class="ham"><i class="fa-solid fa-bars"></i></a>
			</div>
			
		</header>
		<main>
			<section id="inicio">
				<img src="img/bannerprincipal.jpg">
				<div class="bloque-inicio">
					<h1>Bienvenidos a Coca Cola</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue nunc sit amet nibh semper hendrerit. Phasellus nisl quam, rhoncus a blandit nec, pellentesque et elit. </p>
					<a href="#nosotros" class="boton boton-rojo">Ver más</a>
				</div>

			</section>
			<section id="nosotros" class="seccion">
				<div class="container">
					<p>Vestibulum ac vulputate tortor. Praesent sodales augue sed felis gravida hendrerit. Quisque eu mauris pellentesque, bibendum turpis in, maximus magna</p>
				</div>
			</section>
			<section id="servicios" class="seccion">
				<div class="container">
					<div class="row">
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio1.jpg">
								</div> 
								<div class="bloque-contenido-servicio">
									<h3>Servicio 1</h3>
									<p>Fusce consectetur, sapien eu consectetur malesuada, diam turpis posuere turpis, et dapibus leo sem ultrices libero. Pellentesque faucibus nunc commodo purus ultrices, at gravida urna feugiat.</p>
									<a href="#" class="boton boton-blanco">Ver más</a>
								</div>
							</div>
							
						</div>
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio2.jpg">
								</div> 
								<div class="bloque-contenido-servicio">
									<h3>Servicio 2</h3>
									<p>Fusce consectetur, sapien eu consectetur malesuada, diam turpis posuere turpis, et dapibus leo sem ultrices libero. Pellentesque faucibus nunc commodo purus ultrices, at gravida urna feugiat.</p>
									<a href="#" class="boton boton-blanco">Ver más</a>
								</div>
							</div>
							
						</div>
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio3.jpg">
								</div> 
								<div class="bloque-contenido-servicio">
									<h3>Servicio 3</h3>
									<p>Fusce consectetur, sapien eu consectetur malesuada, diam turpis posuere turpis, et dapibus leo sem ultrices libero. Pellentesque faucibus nunc commodo purus ultrices, at gravida urna feugiat.</p>
									<a href="#" class="boton boton-blanco">Ver más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="galeria">
				<div class="container-fluid">
					<div class="row">
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio1.jpg">
								<h4>Imagen1</h4>
							</div>
						</div>
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio2.jpg">
								<h4>Imagen2</h4>
							</div>	
						</div>
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio3.jpg">
								<h4>Imagen3</h4>
							</div>	
						</div>
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio4.jpg">
								<h4>Imagen4</h4>
							</div>	
						</div>
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio5.jpg">
								<h4>Imagen5</h4>
							</div>	
						</div>
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio6.jpg">
								<h4>Imagen6</h4>
							</div>	
						</div>
					</div>
				</div>
			</section>
			<section id="contactenos" class="seccion">
				<iframe width="520" height="400" frameborder="0" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Bucaramanga+(colombia)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
				<div class="container-fluid">
					<div class="row">
						<div class="columna columna-41 columna-mobile-100 empujar-58 empujar-mobile-0 sinpadding-mobile">
							<form action="" method="post">
								<div class="form-block">
									<input type="text" name="nombre" class="form-control" placeholder="Nombre">
								</div>
								<div class="form-block">
									<input type="email" name="email" class="form-control" placeholder="Email">
								</div>
								<div class="form-block">
									<textarea name="mensaje" placeholder="Mensaje"></textarea>
								</div>
								<div class="form-block bloque-ultimo">
									<input type="submit" class="boton boton-negro" value="Enviar">
								</div>
							</form>
						</div>
					</div>
				</div>
				 
			</section>
		</main>
		<footer class="seccion">
			<div class="container">
				<div class="row">
					<div class="columna columna-25 columna-mobile-100">
						<img src="img/logo-blanco.png" class="logo-footer">
						<p>Nulla condimentum, felis et lacinia semper, turpis leo bibendum mauris, eget lacinia magna lectus id nibh. Nullam tincidunt tempor libero quis laoreet. Ut semper velit ut placerat congue.</p>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Temas relacionados
						</h3>
						<ul>
							<li><a href="#">Tema 1</a></li>
							<li><a href="#">Tema 2</a></li>
							<li><a href="#">Tema 3</a></li>
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Datos de contacto
						</h3>
						<ul>
							<li>maleja274@hotmail.com</li>
							<li>+573043371239</li>
							<li>calle 22 20 37 san francisco, bucaramanga<br>Colombia - Santander</li>
						</ul>
						
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Redes Sociales
						</h3>
						<ul class="redes">
							<li><a href="#">
								<i class="fa-brands fa-square-facebook"></i>
							</a>
						</li>
							<li><a href="#">
								<i class="fa-brands fa-twitter"></i>
							</a>
						</li>
							<li><a href="#">
								<i class="fa-brands fa-instagram"></i>
							</a>
						</li>
						</ul>
						
					</div>
				</div>
			</div>
			<div class="barra-footer">
				&copy; Derechos Reservados -2022
			</div>
		</footer>
		<script src="js/jquery.js"></script>
		<script src="js/funciones.js"></script>
	</body>
</html>