<!DOCTYPE html>
<html>

<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../assets/img/logo/logoetiqueta.png" />
	<link rel="icon" type="image/png" href="../../assets/img/form2.jpg" />
	<!--LINK FUENTES-->
	<link href="../../lib/fontawesome/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<!--LINK MEDIA QUERIES-->
	<meta name="viewport" content="width=device-width, initalscale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../../css/inicio/inicio.css">
	<link rel="stylesheet" type="text/css" href="../../css/inicio/media/max1024.css">
	<link rel="stylesheet" type="text/css" href="../../css/inicio/media/max768.css">
	<link rel="stylesheet" type="text/css" href="../../css/inicio/media/max550.css">
	<link rel="stylesheet" type="text/css" href="../../css/inicio/media/max400.css">
	<!--JAVASCRIPT-->
	<script type="text/javascript" src="../../lib/jquery/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../../js/problemas.js"></script>
	<script src="../../js/hamburguesa/hamburguesa.js"></script>
</head>

<body>
	<div id="movilbar">
		<i class="fas fa-bars"></i>
	</div>

	<div id="menumovil" class="menumovil">
		<h2>TravelEarth S.L</h2>
		<h3 style="text-align: center;margin-top: 15px;font-weight: normal;padding: 0px 20px;">
		<?php
			error_reporting(E_ERROR | E_PARSE);
			session_start();
			//ERROR UNDEFINED EN CASO DE NO HABER INICIADO SESION
			$correoSesion = $_SESSION["correo"];
			if ($correoSesion != null) {
				echo "Bienvenid@ $correoSesion";
			}
   		?>
		</h3>
		<ul>
			<li><a href="#">Inicio</a></li>
			<li>
				<a id="menumovilcontinentes">Continentes</a>
				<ul id="submenucontinentes">
					<li><a href="../continentes/europa/europa.php">Europa</a></li>
					<li><a href="../continentes/america/america.php">América</a></li>
					<li><a href="../continentes/africa/africa.php">África</a></li>
					<li><a href="../continentes/asia/asia.php">Asia</a></li>
					<li><a href="../continentes/oceania/oceania.php">Oceanía</a></li>
				</ul>
			</li>
			<li><a href="../form/registro.php" class="navpc">Registrarse</a></li>
			<?php
	        	if ($correoSesion == null) {
	        		echo "<li><a href='../form/login.php' class='navpc'>Iniciar sesión</a></li>";
	        	}else{
	        		echo '<li><a href="../form/cerrarSesion.php">Cerrar sesión</a></li>';
	        	}
	        ?>
		</ul>
		<div class="cajasocial">
			<div class="social">
				<a href="https://es-es.facebook.com/"><i class="fab fa-facebook-square fa-3x" target="_blank"></a></i>
				<a href="https://www.instagram.com/?hl=es"><i class="fab fa-instagram fa-3x" target="_blank"></a></i>
				<a href="https://twitter.com/?lang=es"><i class="fab fa-twitter-square fa-3x" class="ultimoicono"
						target="_blank"></a></i>
			</div>
		</div>
	</div>
	<header>
		<div class="inicio">
			<div>
				<h1>TravelEarth S.L</h1>
				<p>¡Bienvenid@s a TravelEarth, la mayor comunidad de viajes de todo el mundo! <br>
					¡En TravelEarth conseguirás averiguar tu próximo viaje, tus intereses sobre lugares remotos, dejar
					tus propias opiniones entre muchas otras cosas más! <br> ¿A qué esperas?</p>
			</div>
			<div class="decoracion" id="uno"></div>
			<div class="decoracion" id="dos"></div>
		</div>
		<div class="decoracion" id="tres"></div>
		<div class="foto">
			<nav class="nav">
				<ul class="navbar">
					<li>
						<a href="#continentes" class="navprimero">Continentes</a>
						<ul class="sublista">
							<li><a href="../continentes/europa/europa.php">Europa</a></li>
							<li><a href="../continentes/america/america.php">América</a></li>
							<li><a href="../continentes/africa/africa.php">África</a></li>
							<li><a href="../continentes/asia/asia.php">Asia</a></li>
							<li><a href="../continentes/oceania/oceania.php">Oceanía</a></li>
						</ul>
					</li>
					<li><a href="#footer">Contacto</a></li>
					<li><a href="../form/registro.php" class="navpc">Registrarse</a></li>
					<?php
						if ($correoSesion == null) {
							echo "<li><a href='../form/login.php' class='navpc'>Iniciar sesión</a></li>";
						}else{
							echo '<li><a href="../form/cerrarSesion.php">Cerrar sesión</a></li>';
						}
					?>
				</ul>
			</nav>
			<div class="campologo">
				<img src="../../assets/img/logo/logo.png" alt="">
			</div>
		</div>
	</header>
	<div class="frase">
		<h2>¿Quienes somos?</h2>
		<p>TravelEarth no está formada por un grupo concreto de trabajadores, TravelEarth es el conjunto de una
			comunidad que soporta diariamente la plataforma ofreciendo nuevas ideas para innovar, ayudando a gente a
			base de comentarios además de disfrutar buscando nuevos lugares por descubrir.</p>
	</div>
	<div class="continentes" id="continentes">
		<h2>¿Qué lugares visitar?</h2>
		<div class="contenido">
			<div class="apartado">
				<div>
					<div id="europa" class="lugares">
						<a href="../continentes/europa/europa.php">
							<div></div>
						</a>
					</div>
				</div>
				<p>Europa</p>
			</div>
			<div class="apartado">
				<div>
					<div id="america" class="lugares">
						<a href="../continentes/america/america.php">
							<div></div>
						</a>
					</div>
				</div>
				<p>América</p>
			</div>
			<div class="apartado">
				<div>
					<div id="africa" class="lugares">
						<a href="../continentes/africa/africa.php">
							<div></div>
						</a>
					</div>
				</div>
				<p>África</p>
			</div>
			<div class="apartado">
				<div>
					<div id="asia" class="lugares">
						<a href="../continentes/asia/asia.php">
							<div></div>
						</a>
					</div>
				</div>
				<p>Asia</p>
			</div>
			<div class="apartado">
				<div>
					<div id="oceania" class="lugares">
						<a href="../continentes/oceania/oceania.php">
							<div></div>
						</a>
					</div>
				</div>
				<p>Oceanía</p>
			</div>
		</div>
	</div>

	<div class="actividades" id="actividades">
		<div class="apartado1actividades">
			<div class="articulo" id="articulo1">
				<div class="imageninfo" id="imageninfo1"><img src="../../assets/img/inicio/app1.jpg" width="100%" ;
						height="100%"></div>
				<div class="textoinfo" id="textoinfo1">
					<h2>Deja tus opiniones</h2>
					<p>Haz saber a todo el mundo de tus experiencias vividas en el mundo entero. Postea tus opiniones
						sobre la cultura, ciudades, gastronomía y lugares remotos del sitio que has explorado y ayuda a
						los demás a descubrir ese gran lugar</p>
				</div>
			</div>
			<div class="articulo" id="articulo2">
				<div class="textoinfo" id="textoinfo2">
					<h2>Resuelve tus dudas</h2>
					<p>Déjate envolver por la gran comunidad de TravelEarth y resuelve todas tus dudas sobre cualquier
						aspecto relacionado del sitio que tienes pensado visitar. <br> ¡Solamente postea tus dudas y en
						cuestión de minutos ya las tendrás solucionadas!</p>
				</div>
				<div class="imageninfo" id="imageninfo2"><img src="../../assets/img/inicio/app2.jpg" width="100%" ;
						height="100%"></div>
			</div>
		</div>
		<div class="apartado2actividades">
			<div class="articulo" id="articulo3">
				<div class="imageninfo" id="imageninfo3"><img src="../../assets/img/inicio/app3.jpg" width="100%" ;
						height="100%"></div>
				<div class="textoinfo" id="textoinfo3">
					<h2>Encuentra nuevas rutas</h2>
					<p>Descubre nuevos lugares para explorar y descubrir con tus amigos y así asegurar el mejor viaje de
						tu vida. En TravelEarth conseguirás encontrar multitud de nuevos sitios además de opiniones que
						te harán saber de lugares que no pensabas que existían. <br>¡Déjate llevar y disfruta de la
						vida!</p>
				</div>
			</div>
			<div class="articulo" id="articulo4">
				<div class="textoinfo" id="textoinfo4">
					<h2>Conoce tu próximo viaje</h2>
					<p>Como principal foco de TravelEarth, buscamos ofrecerte todo el material posible con el fin de
						enseñar a todo el mundo nuevos lugares, cultura y pensamientos de todos los rincones del mundo.
						<br>Encuentra tu próximo viaje, tu próxima experiencia, tu nuevo estilo de vida :)</p>
				</div>
				<div class="imageninfo" id="imageninfo4"><img src="../../assets/img/inicio/app4.jpg" width="100%" height="100%"></div>
			</div>
		</div>
	</div>

	<?php
		//ERROR UNDEFINED ANTES DE ENVIAR MSG
		$correoProblema = $_POST["correoProblema"];
		$textoProblema = $_POST["texto"];

		$longCorreo = strlen($correoProblema);
		$longTexto = strlen($textoProblema);
	?>

	<div class="mensaje" id="mensajeProblema">
		<div class="titulomensaje">
			<h2>¿Tienes algún problema?</h2>
		</div>
		<div class="formmensaje">
			<form action="<?php
				if(strpos($correoProblema,'@') && strpos($correoProblema,'.') && $longCorreo > 10 && $longTexto <= 450 && $longTexto >= 50){
					echo 'inicio.php';
				}else{
					echo 'inicio.php#mensajeProblema';
				}
			?>" method="post" id="formProblema">
				<div class="flexform">
					<div class="contenidoform">
						<label for="correo">Inserta tu correo (Debes iniciar sesión)</label> <br>
						<input style="font-family: calibri;font-size: 16px" type="email" name="correoProblema"
							id="correoProblema" placeholder="Se diferencian mayúsculas y minúsculas" value="<?php
							echo $correoProblema;

						?>">
						<br>
						<p class="error" id="error1">
							<?php
							if (isset($correoProblema)) {
								if (strlen($correoProblema) == 0) {
									echo "Campo de correo vacio (*)";
								}else if (!strpos($correoProblema,'@') || !strpos($correoProblema,'.')) {
									echo "Formato de correo incorrecto (*)";
								}
							}
							?>
						</p>
						<br>
						<label for="texto">Inserta tu mensaje</label> <br>
						<textarea style="font-family: calibri" name="texto" id="mensaje" cols="30"
							rows="10"><?php if(strlen($textoProblema) > 450 || strlen($textoProblema) <= 50){echo $textoProblema;}?></textarea>
						<p class="error" id="error2">
							<?php
							if (isset($textoProblema)) {
								if ($longTexto == 0) {
									echo "Tu comentario está vacío (*)";
								}else if ($longTexto < 50) {
									echo "Tu comentario es muy corto (mínimo 50 caracteres) (*)";
								}else if ($longTexto > 450) {
									echo "Tu comentario es muy largo (máximo 450 caracteres) (*)";
								}
							}
							?>
						</p>
					</div>
				</div>
				<div class="submit" id="submitProblema">
					<div id="submitlogin">
						<p class="textosubmit">Enviar comentario</p>
					</div>
				</div>
			</form>
		</div>
	</div>

	<?php

	if ($longTexto != 0 && $longTexto > 50 && $longTexto <= 450 && $longCorreo != 0 && strpos($correoProblema,'@') && strpos($correoProblema,'.')){

		date_default_timezone_set("Europe/Madrid");
		$fecha = date("y/m/d");
		$hora = date("H:i:s");
		
		require("../form/conexion.php");

		$con = new mysqli($host,$user,$pass,$db);
		$insertarComentario = "INSERT INTO problemas (usuario, problema, fecha, hora) VALUES ('$correoProblema','$textoProblema', '$fecha', '$hora')";

		if (!$con) {
			echo "<script>";
			echo "alert('Error en la conexion con base de datos');";
			echo "</script>";
		}else{

			if ($correoSesion != null) {
				if ($correoSesion == $correoProblema) {
					$queryInsert = $con->query($insertarComentario);
					if (!$queryInsert){
						echo "<script>";
						echo "alert('Error en la inserción de datos');";
						echo "</script>";
					}else{

						echo "<script>";
						echo "$('#correoProblema').html('');";
						echo "$('#mensaje').html('');";
						echo "</script>";
					}
				}else{
					echo "<script>";
					echo "alert('Ese no es tu correo');";
					echo "</script>";
				}
				
			}else{
				echo "<script>";
				echo "alert('Inicia sesión para enviar comentarios');";
				echo "</script>";
			}
			
		}
	}

	?>

	<footer id="footer">
		<div class="contenidofooter">
			<div class="contactosfooter">
				<h2>Contacta con nosotros</h2>
				<ul>
					<li><a href="mailto:travelearth.exploring@gmail.com">TravelEarth.exploring@gmail.com</a></li>
					<li><a href="tel:735625672">735625672</a></li>
					<li>Calle Rosas, nº 56 <br> Manises (46940), Valencia</li>
				</ul>
			</div>

			<div class="apartadosfooter">
				<h2>Lugares que visitar</h2>
				<ul>
					<li><a href="../continentes/europa/europa.php">Europa</a></li>
					<li><a href="../continentes/america/america.php">América</a></li>
					<li><a href="../continentes/africa/africa.php">África</a></li>
					<li><a href="../continentes/asia/asia.php">Asia</a></li>
					<li><a href="../continentes/oceania/oceania.php">Oceanía</a></li>
				</ul>
			</div>

			<div class="iconos">
				<div>
					<div>
						<a href="https://es-es.facebook.com/"><i class="fab fa-facebook-square fa-3x"></i></a>
						<a href="https://www.instagram.com/?hl=es"><i class="fab fa-instagram fa-3x"></i></a>
						<a href="https://twitter.com/?lang=es"><i class="fab fa-twitter-square fa-3x"
								class="ultimoicono"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="mapafooter">
			<iframe class="mapa"
				src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12315.948075341892!2d-0.46593889025878893!3d39.4922077217942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1572444970968!5m2!1ses!2ses"
				width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<div class="copy">
			<p>Copyright 2019 - Iván Torres García</p>
		</div>
	</footer>
</body>

</html>