<!DOCTYPE html>
<html>
<head>
	<title>Asia - TravelEarth</title>
	<link rel="shortcut icon" href="../../../assets/img/logo/logoetiqueta.png" />
	<meta name="viewport" content="width=device-width, initalscale=1.0, user-scalable=no">
	<!--LINK JAVASCRIPT-->
	<script type="text/javascript" src="../../../lib/jquery/jquery-3.6.0.min.js"></script>
	<script src="../../../js/contientes/asia/paises.js"></script>
	<script src="../../../js/hamburguesa/hamburguesa.js"></script>
	<!--LINK FUENTES-->
	<link href="../../../lib/fontawesome/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<!--LINK MEDIA QUERIES-->
	<link rel="stylesheet" type="text/css" href="../../../css/continentes/media/max1024width.css">
	<link rel="stylesheet" type="text/css" href="../../../css/continentes/europa.css">
	<link rel="stylesheet" type="text/css" href="../../../css/continentes/media/max1024height.css">
	<link rel="stylesheet" type="text/css" href="../../../css/continentes/media/max550.css">
	<link rel="stylesheet" type="text/css" href="../../../css/continentes/media/max768.css">
</head>
<body>
	<!--BARRA DE NAVEGACIÓN MÓVIL-->
	<nav class="navmovil">
			<ul class="navbarmovil">
				<li><a href="../../inicio/inicio.php" class="navprimeromovil">Inicio</a></li>
				<li><a href="#continentes" class="navpc">Continentes</a>
					<ul>
						<li><a href="../europa/europa.php">Europa</a></li>
						<li><a href="../america/america.php">América</a></li>
						<li><a href="../africa/africa.php">África</a></li>
						<li><a href="#">Asia</a></li>
						<li><a href="../oceania/oceania.php">Oceanía</a></li>
					</ul>
				</li>
				<li><a href="#footer" class="navpc">Contacto</a></li>
				<li><a href="../../form/registro.php" class="navpc">Registrarse</a></li>
				 <?php
				 	error_reporting(E_ERROR | E_PARSE);
				    session_start();
					$correoSesion = $_SESSION["correo"];
		        	if ($correoSesion == null) {
		        		echo "<li><a href='../../form/login.php' class='navpc'>Iniciar sesión</a></li>";
		        	}else{
		        		echo '<li><a href="../../form/cerrarSesion.php">Cerrar sesión</a></li>';
		        	}
		        ?>
			</ul>
   	</nav>
   	<div id="movilbar">
		<i class="fas fa-bars"></i>
	</div>
	<div id="menumovil" class="menumovil">
   		<h2>TravelEarth S.L</h2>
   		<h3 style="text-align: center;margin-top: 15px;font-weight: normal;font-family: 'Lobster', cursive;padding: 0px 20px;"><?php

        	if ($correoSesion != null) {
        		echo "Bienvenid@ $correoSesion";
        	}
   		?></h3>
		<ul>
			<li><a href="../../inicio/inicio.php">Inicio</a></li>
			<li>
				<a id="menumovilcontinentes">Continentes</a>
				<ul id="submenucontinentes">
					<li><a href="../europa/europa.php">Europa</a></li>
					<li><a href="../america/america.php">América</a></li>
					<li><a href="../africa/africa.php">África</a></li>
					<li><a href="#">Asia</a></li>
					<li><a href="../oceania/oceania.php">Oceanía</a></li>
				</ul>
			</li>
			<li><a href="../../form/registro.php" class="navpc">Registrarse</a></li>
			 <?php
	        	if ($correoSesion == null) {
	        		echo "<li><a href='../../form/login.php' class='navpc'>Iniciar sesión</a></li>";
	        	}else{
	        		echo '<li><a href="../../form/cerrarSesion.php">Cerrar sesión</a></li>';
	        	}
	        ?>
		</ul>
		<div class="cajasocial">
			<div class="social">
				<a href="https://es-es.facebook.com/"><i class="fab fa-facebook-square fa-3x" target="_blank"></a></i>
				<a href="https://www.instagram.com/?hl=es"><i class="fab fa-instagram fa-3x" target="_blank"></a></i>
				<a href="https://twitter.com/?lang=es"><i class="fab fa-twitter-square fa-3x" class="ultimoicono" target="_blank"></a></i>
			</div>
		</div>
   	</div>

   	<div style="background-color: #525252">
   		<!--APARTADO DE HEADER-->
		<header>
			<div class="overlay"></div>
			<div class="titulo">
				<h1>Asia</h1>
			</div>
			<ul>
				<li><img src="../../../assets/img/asia/1.jpg" alt=""></li>
				<li><img src="../../../assets/img/asia/2.jpg" alt=""></li>
				<li><img src="../../../assets/img/asia/3.jpg" alt=""></li>
				<li><img src="../../../assets/img/asia/4.jpg" alt=""></li>
				<li><img src="../../../assets/img/asia/5.jpg" alt=""></li>
			</ul>
		</header>
		<!--APARTADO DE FRASE DESCRIPTIVA DEL CONTINENTE-->
		<div class="frase">
			<h2>Asia</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
	<!--APARTADO DE PAISES DE CONTINENTES-->
	<div class="paises">
		<h2>Paises</h2>
		<!--LISTA DE PAISES-->
		<div>
			<div>
				<div class="lista1" class="lista">
					<div><a href="../../comentarios/plantillaforo.php?pais=afganistan" class="pais" id="afganistan">Afganistán</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=arabiaSaudita" class="pais" id="arabia">Arabia Saudita</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=armenia" class="pais" id="armenia">Armenia</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=azerbaiyan" class="pais" id="azerbaiyan">Azerbaiyán</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=banglades" class="pais" id="banglades">Bangladés</a></div>
				</div>
				<div class="divsta2" class="lista">
					<div><a href="../../comentarios/plantillaforo.php?pais=birmaniaYMyanmar" class="pais" id="birmania">Birmania/Myanmar</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=brunei" class="pais" id="brunei">Brunéi</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=butan" class="pais" id="butan">Bután</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=camboya" class="pais" id="camboya">Camboya</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=catar" class="pais" id="catar">Catar</a></div>
				</div>
				<div class="lista3">
					<div><a href="../../comentarios/plantillaforo.php?pais=china" class="pais" id="china">China</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=chipre" class="pais" id="chipre">Chipre</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=coreaDelNorte" class="pais" id="norte">Corea del Norte</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=coreaDelSur" class="pais" id="sur">Corea del Sur</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=emiratosArabes" class="pais" id="emiratos">Emiratos Árabes</a></div>
				</div>
				<div class="lista4">
					<div><a href="../../comentarios/plantillaforo.php?pais=filipinas" class="pais" id="filipinas">Filipinas</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=georgia" class="pais" id="georgia">Georgia</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=india" class="pais" id="india">India</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=indonesia" class="pais" id="indonesia">Indonesia</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=irak" class="pais" id="irak">Irak</a></div>
				</div>
				<div class="lista5">
					<div><a href="../../comentarios/plantillaforo.php?pais=iran" class="pais" id="iran">Irán</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=israel" class="pais" id="israel">Israel</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=japon" class="pais" id="japon">Japón</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=jordania" class="pais" id="jordania">Jordania</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=kazajistan" class="pais" id="kazajistan">Kazajistán</a></div>
				</div>
				<div class="lista6">
					<div><a href="../../comentarios/plantillaforo.php?pais=kirguistan" class="pais" id="kirguistán">Kirguistán</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=kuwait" class="pais" id="kuwait">Kuwait</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=laos" class="pais" id="laos">Laos</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=libano" class="pais" id="libano">Líbano</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=malasia" class="pais" id="malasia">Malasia</a></div>
				</div>
				<div class="lista7">
					<div><a href="../../comentarios/plantillaforo.php?pais=maldivas" class="pais" id="maldivas">Maldivas</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=mongolia" class="pais" id="mongolia">Mongolia</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=nepal" class="pais" id="nepal">Nepal</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=oman" class="pais" id="oman">Omán</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=pakistan" class="pais" id="pakistan">Pakistán</a></div>
				</div>
				<div class="lista8">
					<div><a href="../../comentarios/plantillaforo.php?pais=rusia" class="pais" id="rusia">Rusia</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=singapur" class="pais" id="singapur">Singapur</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=siria" class="pais" id="siria">Siria</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=sriLanka" class="pais" id="srilanka">Sri Lanka</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=tailandia" class="pais" id="tailandia">Tailandia</a></div>
				</div>
				<div class="lista9">
					<div><a href="../../comentarios/plantillaforo.php?pais=tayikistan" class="pais" id="tayikistan">Tayikistán</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=timorOriental" class="pais" id="timor">Timor Oriental</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=turkmenistan" class="pais" id="turkmenistan">Turkmenistán</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=turquia" class="pais" id="turquia">Turquía</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=uzbekistan" class="pais" id="uzbekistan">Uzbekistán</a></div>
				</div>
				<div class="lista10">
					<div><a href="../../comentarios/plantillaforo.php?pais=vietnam" class="pais" id="vietnam">Vietnam</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=yemen" class="pais" id="yemen">Yemen</a></div>
				</div>
			</div>
		</div>
	</div>
	<!--APARTADO DE FRASE DESCRIPTIVA DE CADA PAIS-->
	<div class="texto">
		<h2 id="titulopais"></h2>
		<p id="textopais"></p>
	</div>
	
	<!--APARTADO DE CUADRO DE FOTOS DEL CONTINENTE EN CUESTION-->
	<div class="marco">
		<div>
			<div><img src="../../../assets/img/asia/imagen1.jpg" width="100%" height="100%"></div>
			<div><img src="../../../assets/img/asia/imagen2.jpg" width="100%" height="100%"></div>
			<div><img src="../../../assets/img/asia/imagen3.jpg" width="100%" height="100%"></div>
			<div><img src="../../../assets/img/asia/imagen4.jpg" width="100%" height="100%"></div>
		</div>
	</div>

	<!--FOOTER-->
	<footer id="footer">
		<div class="contenidofooter">
			<!--APARTADO FOOTER CONTACTOS-->
			<div class="contactosfooter">
				<h2>Contacta con nosotros</h2>
				<ul>
					<li><a href="mailto:travelearth.exploring@gmail.com">TravelEarth.exploring@gmail.com</a></li>
					<li><a href="tel:735625672">735625672</a></li>
					<li>Calle Rosas, nº 56 <br> Manises (46940), Valencia</li>
				</ul>
			</div>
			<!--APARTADO FOOTER LISTA DE CONTINENTES-->
			<div class="apartadosfooter">
				<h2>Lugares que visitar</h2>
				<ul>
					<li><a href="../europa/europa.php">Europa</a></li>
					<li><a href="../america/america.php">América</a></li>
					<li><a href="../africa/africa.php">África</a></li>
					<li><a href="#">Asia</a></li>
					<li><a href="../oceania/oceania.php">Oceanía</a></li>
				</ul>
			</div>
			<!--APARTADO DE FOOTER ICONOS DE ACCESO-->
			<div class="iconos">
				<div>
					<div>
						<a href="https://es-es.facebook.com/"><i class="fab fa-facebook-square fa-3x"></i></a>
						<a href="https://www.instagram.com/?hl=es"><i class="fab fa-instagram fa-3x"></i></a>
						<a href="https://twitter.com/?lang=es"><i class="fab fa-twitter-square fa-3x" class="ultimoicono"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!--APARTADO DE FOOTER MAPA DE LOCALIZACION-->
		<div class="mapafooter">
			<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12315.948075341892!2d-0.46593889025878893!3d39.4922077217942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1572444970968!5m2!1ses!2ses" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<!--APARTADO FOOTER COPYRIGHT-->
		<div class="copy">
			<p>Copyright 2019 - Iván Torres García</p>
		</div>
	</footer>
</body>
</html>