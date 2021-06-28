<?php
function formatName($name){
	if($name == "espana"){
		$name = "españa";
	}
	$formattedName = ucfirst($name);
	return $formattedName;
}

	error_reporting(E_ERROR | E_PARSE);
	require("../form/conexion.php");
	$con = new mysqli($host,$user,$pass,$db);

	session_start();
   	$correoSesion = $_SESSION["correo"];

   	$titulo = $_POST['titulo'];
   	$texto = $_POST['texto'];
   	$IDpais = $_GET['pais'];
	$errores = false;

   	date_default_timezone_set('Europe/Madrid');
	$fecha = date('y/m/d');
	$hora = date('h:i:s');

if (isset($titulo) && isset($texto) && !empty($titulo) && !empty($texto)) {
	if($correoSesion == null){
		$errores = true;
	}else if (!$con) {
		echo "ERROR --> La conexión ha fallado.";
	}else{

		$insertarPais = "SELECT * FROM paises WHERE pais = '$IDpais'";
		$querySelect = $con->query($insertarPais);

		$fetchContinente = mysqli_fetch_assoc($querySelect);


		if (!$querySelect) {
			echo "ERROR --> El dato de continente no ha sido registrado.";
		}else{
			$insertarDatos= "INSERT INTO posts (usuario,pais,continente,fecha,hora,tituloPost,comentario) VALUES ('$correoSesion','$IDpais','$fetchContinente[continente]','$fecha','$hora','$titulo','$texto')";

			$queryInsert = $con->query($insertarDatos);
			if (!$queryInsert) {
				echo "ERROR --> Los datos del post no se han insertado correctamente.";
			}
		}
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo formatName($IDpais); ?></title>
		
		<link rel="shortcut icon" href="../../assets/img/logo/logoetiqueta.png" />
		<meta name="viewport" content="width=device-width, initalscale=1.0, user-scalable=no">

		<link href="../../lib/fontawesome/css/all.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../../css/plantillaforo/plantillaforo.css">
		<link rel="stylesheet" type="text/css" href="../../css/plantillaforo/media/max1023px.css">
		<link rel="stylesheet" type="text/css" href="../../css/plantillaforo/media/max820px.css">

		<script type="text/javascript" src="../../lib/jquery/jquery-3.6.0.min.js"></script>
		<script type="text/javascript" src="../../js/hamburguesa/hamburguesa.js"></script>
		<script type="text/javascript" src="../../js/posts/subir_bajar_escribir.js"></script>
	</head>
	<body>
		<?php
		if($errores == true){ ?>
		<div id="errores">
			<h2 class="hola">ERROR: No has iniciado sesión !</h2>
			<ul>
				<li>Para escribir un comentario, asegurate de haber iniciado sesión.</li>
			</ul>
		</div>
		<?php } ?>

		<div id="movilbar">
			<p id="bajarcomentarios" class="titulo">Escribir post</p>
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
				<li><a href="../inicio/inicio.php">Inicio</a></li>
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
					<a href="https://twitter.com/?lang=es"><i class="fab fa-twitter-square fa-3x" class="ultimoicono" target="_blank"></a></i>
				</div>
			</div>
		</div>
		
		<header>
			<h1><?php echo formatName($IDpais); ?></h1>
		</header>
		<nav class="nav">
		    <ul class="navbar">
		    	<li><a href="../inicio/inicio.php">Inicio</a></li>
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
		        <li><a href="../form/registro.php" class="navpc">Registrarse</a></li>
				 <?php
		        	if ($correoSesion == null) {
		        		echo "<li><a href='../form/login.php' class='navpc'>Iniciar sesión</a></li>";
		        	}else{
		        		echo '<li><a href="../form/cerrarSesion.php">Cerrar sesión</a></li>';
		        	}
		        ?>
		        <li><p id="bajarcomentarios2">Escribir post</p></li>
		    </ul>
		</nav>

		<div class="foro">

			<?php
				//Get num MAX rows
				$selectNumRegistros = "SELECT MAX(ID) as ID FROM posts WHERE pais = '$IDpais' ORDER BY ID DESC";
				$queryNumRegistros = $con->query($selectNumRegistros);
				$fetchNumRegistros = mysqli_fetch_assoc($queryNumRegistros);
				$numRegistros = $fetchNumRegistros['ID'];

				//Get first comment
				$nextRegistro = $numRegistros;
				$rowsReturned = 0;
				while ($nextRegistro <= $numRegistros) {
					if($nextRegistro == null){
						break;
					}
					$rowsReturned++;
				?>
				<div class="comentario">
					<div class="identificacion">
						<span>
							<!--CORREO-->
							<?php 
							$selectCorreo = "SELECT * FROM posts WHERE ID = '$nextRegistro'";
							$querySelectCorreo =  $con->query($selectCorreo);
							$fetchCorreo = mysqli_fetch_assoc($querySelectCorreo);
							?> 

							<!--APODO/NICK-->
							<span>
							<?php
							$selectApodo = "SELECT * FROM login WHERE correo = '$fetchCorreo[usuario]'";
							$querySelectApodo = $con->query($selectApodo);
							if (!$querySelectApodo) {
								echo "ERROR --> No se ha podido cargar el nick";
							}else{
								$fetchSelectApodo = mysqli_fetch_assoc($querySelectApodo);
								if (!$fetchSelectApodo) {
									echo "ERROR: Nick no encontrado.";
								}else{
									echo "@".$fetchSelectApodo['nick'];
								}
							}
							?> 
							</span> 

						</span>
						
						<!--FECHA-->
						<span>
						<?php
						$selectfecha = "SELECT * FROM posts WHERE ID = '$nextRegistro'";
						$querySelectFecha =  $con->query($selectfecha);
						if (!$querySelectFecha) {
							echo "ERROR --> No se ha podido acceder a la fecha del comentario.";
						}else{
							$fetchFecha = mysqli_fetch_assoc($querySelectFecha);
							if (!$fetchFecha) {
								echo "ERROR --> Fecha del comentario no encontrada.";
							}else{
								echo $fetchFecha['fecha'];
							}
						}
						?>
						</span>

					</div>

					<div class="textocomentario">
						<!--TITULO-->
						<h3>
						<?php
						$selectTitulo = "SELECT * FROM posts WHERE ID = '$nextRegistro'";
						$querySelectTitulo =  $con->query($selectTitulo);
						if (!$querySelectTitulo) {
							echo "ERROR --> No se ha podido cargar el titulo.";
						}else{
							$fetchTitulo = mysqli_fetch_assoc($querySelectTitulo);
							if (!$fetchTitulo) {
								echo "ERROR --> Titulo del comentario no encontrado.";
							}else{
								echo $fetchTitulo['tituloPost'];
							}
						}
						?>
						</h3>

						<!--COMENTARIO-->
						<?php
						$selectPost = "SELECT * FROM posts WHERE ID = '$nextRegistro'";
						$querySelectPost =  $con->query($selectPost);
						if (!$querySelectPost) {
							echo "ERROR --> No se ha podido acceder al contenido del comentario.";
						}else{
							$fetchPost = mysqli_fetch_assoc($querySelectPost);
							if (!$fetchPost) {
								echo "ERROR --> Contenido del comentario no encontrado.";
							}else{
								echo "<p>" . $fetchPost['comentario'] . "</p>";
							}
						}
						?>

					</div>
				</div>

				<!--ITERADOR-->
				<?php
				$selectNextRegistro = "SELECT MAX(ID) as ID FROM posts WHERE ID < '$nextRegistro' AND pais = '$IDpais';";
				$queryNextRegistro = $con->query($selectNextRegistro);
				$fetchNextRegistro = mysqli_fetch_assoc($queryNextRegistro);
				$nextRegistro = $fetchNextRegistro['ID'];
				}
				if($rowsReturned == 0){
				?>
				<div class="noComments">
					SIN COMENTARIOS
				</div>
				<?php } ?>
		</div>

		<aside>
		<?php 
			$selectContinente = "SELECT * FROM paises WHERE pais = '$IDpais'";
			$queryContinente = $con->query($selectContinente);
			$fetchContinente = mysqli_fetch_assoc($queryContinente);
			$continente = $fetchContinente['continente'];
			echo "<h2>".formatName($continente)."</h2>";
		?>
			<div class="paises">
				<ul>
					<?php

					$selectPaises = "SELECT * FROM paises WHERE continente = '$continente';";
					$queryPaises = $con->query($selectPaises);

					while($row = $queryPaises->fetch_assoc()){
						$pais = $row['pais'];
						echo "<li><a href = '../comentarios/plantillaforo.php?pais=$pais'>".formatName($pais)."</a></li>";
					}
					
					?>
				</ul>
			</div>
		</aside>

		<?php
			$URL = "plantillaforo.php?pais=".$_GET['pais'];
		?>

		<div class="escribir">
			<form action="<?php
			echo $URL;
			?>" method="post" id="posts">
				<label for="texto">Escribe un comentario :</label>
				<br>
				<input type="text" name="titulo" class="titulotexto" placeholder="Título">
				<br>
				<p id="tituloerror"></p>
				<input class="texto" type="text" name="texto" placeholder="¡Cuenta tu experiencia!">
				<br>
				<p id="posterror"></p>
				<div class="submit" id="submitpost">
					<div id="submittexto">
						<p class="textosubmit">Enviar</p>
					</div>
				</div>
			</form>
		</div>

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
							<a href="https://es-es.facebook.com/"><i class="fab fa-facebook-square fa-3x" target="_blank"></a></i>
							<a href="https://www.instagram.com/?hl=es"><i class="fab fa-instagram fa-3x" target="_blank"></a></i>
							<a href="https://twitter.com/?lang=es"><i class="fab fa-twitter-square fa-3x" class="ultimoicono" target="_blank"></a></i>
						</div>
					</div>
				</div>
			</div>
			<div class="mapafooter">
				<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12315.948075341892!2d-0.46593889025878893!3d39.4922077217942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1572444970968!5m2!1ses!2ses" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
			<div class="copy">
				<p>Copyright 2019 - Iván Torres García</p>
			</div>
		</footer>
	</body>
</html>