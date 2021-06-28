<!DOCTYPE html>
<html>
<head>
	<title>África - TravelEarth</title>
	<link rel="shortcut icon" href="../../../assets/img/logo/logoetiqueta.png" />
	<meta name="viewport" content="width=device-width, initalscale=1.0, user-scalable=no">
	<!--LINK JAVASCRIPT-->
	<script type="text/javascript" src="../../../lib/jquery/jquery-3.6.0.min.js"></script>
	<script src="../../../js/contientes/africa/paises.js"></script>
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
						<li><a href="#">África</a></li>
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
					<li><a href="../america/america.php">América</a></li>
					<li><a href="#">África</a></li>
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
				<h1>África</h1>
			</div>
			<ul>
				<li><img src="../../../assets/img/africa/imagen1.jpg" alt=""></li>
				<li><img src="../../../assets/img/africa/imagen2.jpg" alt=""></li>
				<li><img src="../../../assets/img/africa/imagen3.jpg" alt=""></li>
				<li><img src="../../../assets/img/africa/imagen4.jpg" alt=""></li>
				<li><img src="../../../assets/img/africa/imagen5.jpg" alt=""></li>
			</ul>
		</header>
		<!--APARTADO DE FRASE DESCRIPTIVA DEL CONTINENTE-->
		<div class="frase">
			<h2>África</h2>
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
					<div><a href="../../comentarios/plantillaforo.php?pais=angola" class="pais" id="angola">Angola</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=argelia" class="pais" id="argelia">Argelia</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=benin" class="pais" id="benin">Benin</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=burkinafaso" class="pais" id="burkinafaso">Burkinafaso</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=burundi" class="pais" id="burundi">Burundi</a></div>
				</div>
				<div class="divsta2" class="lista">
					<div><a href="../../comentarios/plantillaforo.php?pais=caboVerde" class="pais" id="cverde">Cabo Verde</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=camerun" class="pais" id="camerun">Camerún</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=camoras" class="pais" id="comoras">Comoras</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=costaDeMarfil" class="pais" id="costamarfil">Costa de Marfil</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=egipto" class="pais" id="egipto">Egipto</a></div>
				</div>
				<div class="lista3">
					<div><a href="../../comentarios/plantillaforo.php?pais=eritrea" class="pais" id="eritrea">Eritrea</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=etiopia" class="pais" id="etiopia">Etiopía</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=gabon" class="pais" id="gabon">Gabón</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=gambia" class="pais" id="gambia">Gambia</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=ghana" class="pais" id="ghana">Ghana</a></div>
				</div>
				<div class="lista4">
					<div><a href="../../comentarios/plantillaforo.php?pais=guinea" class="pais" id="guinea">Guinea</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=guinaBissau" class="pais" id="guinabissau">Guina Bissau</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=guineaEcuatorial" class="pais" id="guineaecuatorial">Guinea Ecuatorial</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=kenia" class="pais" id="kenia">Kenia</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=libia" class="pais" id="libia">Libia</a></div>
				</div>
				<div class="lista5">
					<div><a href="../../comentarios/plantillaforo.php?pais=madagascar" class="pais" id="madagascar">Madagascar</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=malaui" class="pais" id="malaui">Malaui</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=marruecos" class="pais" id="marruecos">Marruecos</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=mauricio" class="pais" id="mauricio">Mauricio</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=mauritania" class="pais" id="mauritania">Mauritania</a></div>
				</div>
				<div class="lista6">
					<div><a href="../../comentarios/plantillaforo.php?pais=mozambique" class="pais" id="mozambique">Mozambique</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=namibia" class="pais" id="namibia">Namibia</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=niger" class="pais" id="niger">Niger</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=nigeria" class="pais" id="nigeria">Nigeria</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=repCentroafricana" class="pais" id="repcentroafricana">Rep. Centroafricana</a></div>
				</div>
				<div class="lista7">
					<div><a href="../../comentarios/plantillaforo.php?pais=repCongo" class="pais" id="repcongo">Rep. Congo</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=sahara" class="pais" id="sahara">Sáhara</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=ruanda" class="pais" id="ruanda">Ruanda</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=senegal" class="pais" id="senegal">Senegal</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=seychelles" class="pais" id="seychelles">Seychelles</a></div>
				</div>
				<div class="lista8">
					<div><a href="../../comentarios/plantillaforo.php?pais=sierraLeona" class="pais" id="sierraleona">Sierra Leona</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=somalia" class="pais" id="somalia">Somalia</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=sudafrica" class="pais" id="sudafrica">Sudáfrica</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=sudan" class="pais" id="sudan">Sudán</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=sudanDelSur" class="pais" id="sudandelsur">Sudán del sur</a></div>
				</div>
				<div class="lista9">
					<div><a href="../../comentarios/plantillaforo.php?pais=tanzania" class="pais" id="tanzania">Tanzania</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=togo" class="pais" id="togo">Togo</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=tunez" class="pais" id="tunez">Túnez</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=uganda" class="pais" id="uganda">Uganda</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=yibuti" class="pais" id="yibuti">Yibuti</a></div>
				</div>
				<div class="lista10">
					<div><a href="../../comentarios/plantillaforo.php?pais=zambia" class="pais" id="zambia">Zambia</a></div>
					<div><a href="../../comentarios/plantillaforo.php?pais=zimbabue" class="pais" id="zimbabue">Zimbabue</a></div>
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
			<div><img src="../../../assets/img/africa/marco1.jpg" width="100%" height="100%"></div>
			<div><img src="../../../assets/img/africa/marco4.jpg" width="100%" height="100%"></div>
			<div><img src="../../../assets/img/africa/marco2.jpg" width="100%" height="100%"></div>
			<div><img src="../../../assets/img/africa/marco3.jpg" width="100%" height="100%"></div>
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
					<li><a href="#">África</a></li>
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