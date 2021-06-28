<!DOCTYPE html>
<html>
<head>
	<title>América - TravelEarth</title>
	<link rel="shortcut icon" href="../../../assets/img/logo/logoetiqueta.png" />
	<meta name="viewport" content="width=device-width, initalscale=1.0, user-scalable=no">
	<!--LINK JAVASCRIPT-->
	<script type="text/javascript" src="../../../lib/jquery/jquery-3.6.0.min.js"></script>
	<script src="../../../js/contientes/america/paises.js"></script>
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
						<li><a href="#">América</a></li>
						<li><a href="../africa/africa.php">África</a></li>
						<li><a href="../asia/asia.php">Asia</a></li>
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
					<li><a href="#">América</a></li>
					<li><a href="../africa/africa.php">África</a></li>
					<li><a href="../asia/asia.php">Asia</a></li>
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
				<h1>América</h1>
			</div>
			<ul>
				<li><img src="../../../assets/img/america/1.jpg" alt=""></li>
				<li><img src="../../../assets/img/america/2.jpg" alt=""></li>
				<li><img src="../../../assets/img/america/3.jpg" alt=""></li>
				<li><img src="../../../assets/img/america/4.jpg" alt=""></li>
				<li><img src="../../../assets/img/america/5.jpg" alt=""></li>
			</ul>
		</header>
		<!--APARTADO DE FRASE DESCRIPTIVA DEL CONTINENTE-->
		<div class="frase">
			<h2>América</h2>
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
					<div><a href="../../comentarios/plantillaforo.php?pais=antigua" class="pais" id="antigua">Antigua y Barbuda</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=argentina" class="pais" id="argentina">Argentina</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=bahamas" class="pais" id="bahamas">Bahamas</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=barbados" class="pais" id="barbados">Barbados</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=belice" class="pais" id="belice">Bélice</a></div>
				</div>
				<div class="lista2" class="lista">
					<div><a href="../../comentarios/plantillaforo.php?pais=bolivia" class="pais" id="bolivia">Bolivia</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=brasil" class="pais" id="brasil">Brasil</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=canada" class="pais" id="canada">Canadá</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=chile" class="pais" id="chile">Chile</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=colombia" class="pais" id="colombia">Colombia</a></div>
				</div>
				<div class="lista3">
					<div><a href="../../comentarios/plantillaforo.php?pais=costaRica" class="pais" id="costarica">Costa Rica</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=cuba" class="pais" id="cuba">Cuba</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=dominica" class="pais" id="dominica">Dominica</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=ecuador" class="pais" id="ecuador">Ecuador</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=salvador" class="pais" id="elsalvador">El Salvador</a></div>
				</div>
				<div class="lista4">
					<div><a href="../../comentarios/plantillaforo.php?pais=estadosUnidos" class="pais" id="eeuu">Estados Unidos</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=granada" class="pais" id="granada">Granada</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=guatemala" class="pais" id="guatemala">Guatemala</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=guyana" class="pais" id="guyana">Guyana</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=haiti" class="pais" id="haiti">Haití</a></div>
				</div>
				<div class="lista5">
					<div><a href="../../comentarios/plantillaforo.php?pais=honduras" class="pais" id="honduras">Honduras</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=jamaica" class="pais" id="jamaica">Jamaica</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=mexico" class="pais" id="mexico">México</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=nicaragua" class="pais" id="nicaragua">Nicaragua</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=panama" class="pais" id="panama">Panamá</a></div>
				</div>
				<div class="lista6">
					<div><a href="../../comentarios/plantillaforo.php?pais=paraguay" class="pais" id="paraguay">Paraguay</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=peru" class="pais" id="peru">Perú</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=repDominicana" class="pais" id="repdominicana">Rep. Dominicana</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=cristobalNieves" class="pais" id="cristobal">San cristobal y Nieves</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=sanVicente" class="pais" id="vicente">San Vicente</a></div>
				</div>
				<div class="lista7">
					<div><a href="../../comentarios/plantillaforo.php?pais=sanVicente" class="pais" id="santalucia">Santa Lucía</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=surinam" class="pais" id="surinam">Surinam</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=trinidad" class="pais" id="trinidad">Trinidad</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=uruguay" class="pais" id="uruguay">Uruguay</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=venezuela" class="pais" id="venezuela">Venezuela</a></div>
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
			<div><img src="../../../assets/img/america/marco1.jpg" width="100%" height="100%"></div>
			<div><img src="../../../assets/img/america/marco2.jpg" width="100%" height="100%"></div>
			<div><img src="../../../assets/img/america/marco3.jpg" width="100%" height="100%"></div>
			<div><img src="../../../assets/img/america/marco4.jpg" width="100%" height="100%"></div>
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
					<li><a href="#">América</a></li>
					<li><a href="../africa/africa.php">África</a></li>
					<li><a href="../asia/asia.php">Asia</a></li>
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