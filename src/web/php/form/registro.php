<?php

	$mostrarForm = false;
	$mostrarErrores = 0;
	$textoError = "";
	
	if(isset($_POST["submit"])){ //ONCE YOU CLICK SUBMIT
		$nombre= $_POST["nombre"];
		$nick= $_POST["nick"];
		$correo= $_POST["correo"]; 
		$pw= $_POST["pw"];
		$pw2= $_POST["pw2"];

		if(isset($nombre) && isset($nick) && isset($correo) && isset($pw) && isset($pw2)){
			if (strlen($nombre) < 2 || strlen($nombre) > 30
			|| strlen($nick) < 3 || strlen($nick) > 20
			|| !strpos($correo,'@') || !strpos($correo,'.') 
			|| strlen($correo)<10 || $pw != $pw2 
			|| strlen($pw) < 8) {

				if(empty($nombre) || empty($nick) || empty($correo) || empty($pw) || empty($pw2)){
	
						if (empty($nombre)) {
							$textoError .= "<p>Nombre vacio</p>";
	
						}
						if (empty($nick)) {
							$textoError .= "<p>Nick vacio</p>";
	
						}
						if (empty($correo)) {
							$textoError .= "<p>Correo vacio</p>";
	
						}
						if (!strpos($correo,'@') && $correo != "" || !strpos($correo,'.') && $correo != ""){
							$textoError .= "<p>Error en correo, formato incorrecto.</p>";
						} 
						if (empty($pw)) {
							$textoError .= "<p>Contraseña vacio</p>";
	
						}else{
							if (empty($pw2)) {
								$textoError .= "<p>Valida tu contraseña</p>";
							}
						}
						
					$mostrarErrores = 1;
					$mostrarForm = true;
	
				}else{
	
					if (strlen($nombre) < 2) {
					$textoError .= "<p>Error en nombre, es muy corto.</p>";
					}
					if (strlen($nombre) > 30) {
						$textoError .= "<p>Error en nombre, es muy largo.</p>";
					}
					if (strlen($nick) < 3) {
						$textoError .= "<p>Error en nick, es muy corto.</p>";
					}
					if (strlen($nick) > 20) {
						$textoError .= "<pError en nick, es muy largo.</p>";
					}
					if ((!strpos($correo,'@')) || (!strpos($correo,'.'))){
						$textoError .= "<p>Error en correo, formato incorrecto.</p>";
					} 
					if ((strlen($correo) < 10)){
						$textoError .= "<p>Error en correo, es muy corto.</p>";
					} 
					if (strlen($pw) < 8) {
						$textoError .= "<p>Error en contraseña, es muy corta.</p>";
					}
					if ($pw != $pw2) {
						$textoError .= "<p>Error en contraseñas, no coinciden.</p>";
					}
	
					$mostrarErrores = 1;
	
					$mostrarForm = true;
				}
	
			}else{
				include("conexion.php");
	
				$pw= password_hash($pw, PASSWORD_DEFAULT);
	
				if(isset($nombre) && !empty($nombre) && isset($nick) && !empty($nick) && isset($correo) && !empty($correo) && isset($pw) && !empty($pw) && isset($pw2) && !empty($pw2)){
	
						$con = new mysqli($host,$user,$pass,$db);
	
						if ($con->connect_errno) {
							printf("Falló la conexión: %s\n", $con->connect_error);
							exit();
						}else{
							$resultNick = $con->query("SELECT * FROM login WHERE nick = '$nick'");
							$resultEmail = $con->query("SELECT * FROM login WHERE correo = '$correo'");
							if ($resultNick->num_rows>0){
								$textoError .= "<p>El nick ya está registrado en la base de datos.</p>";
								$mostrarErrores = 1;	
							}
							if($resultEmail->num_rows>0){
								$textoError .= "<p>El correo ya está registrado en la base de datos.</p>";
								$mostrarErrores = 1;
							}
							if($mostrarErrores == 0){
								$query="INSERT INTO login(nombre, nick, correo, contrasenya) VALUES ('$nombre','$nick','$correo','$pw')";
								
								if($con->query($query)){
									include("phpmailer.php");
								}
							}
						}
					$mostrarForm = true;
				}
			}
		}else {
			$mostrarForm = true;
		}
	}else{
		//FIRST TIME ON PAGE
		$mostrarForm = true;
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login/Register</title>
	<link rel="shortcut icon" href="../../assets/img/logo/logoetiqueta.png" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initalscale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../../css/form/registro.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<script type="text/javascript" src="../../lib/jquery/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../../js/seguridadLogin.js"></script>
</head>

<body>
<div id="errores">
	<div>
		<h2>Errores en la conexión</h2>
		<p id="errorestexto"></p>
		<a href="#" id="aceptarerrores">Aceptar</a>
	</div>
</div>

<div class="overlay"></div>


<div class="mitad"></div>
<div class="mitad2"></div>


<div class="contenedor">
	<div class="formulario">
		<!--CAJA ENLACE-->
		<div class="foto" id="foto">
			<div class="texto">
				<h1 id="titulo">¿Aún no te has registrado?</h1>
				<h2 id="subtitulo">¡Por favor introduce tus datos para registrarse y formar parte de nuesta gran comunidad!</h2>
			</div>
			<div class="login2">
				<!--ENLACE DE LOGIN-->
				<div id="loginenlace">
					<p>¿Ya tienes una cuenta?</p>
					<a href="login.php">Iniciar sesión</a>
				</div>
				<!--ENLACE DE REGISTRO-->
				<div id="registroenlace">
					<p>¿Todavía no tienes una cuenta?</p>
					<a href="registro.php">Regístrate</a>
				</div>
			</div>
		</div>
		<?php
if ($mostrarForm == true) {
?>
		<!--FORMULARIO DEL APARTADO REGISTRO-->
		<div class=cajaformulario id="cajaformulario">
			<div class="formregistro" id="formregistro">
				<form method="post" id="formularioregistro" action="registro.php">
					<div class="contenidoform">
						<div class="enunciado">
							<h2>Registrarse</h2>
						</div>
						<div class="informacion">
							<input id="nombre" type="text" name="nombre" placeholder="Nombre y apellidos" value="<?php 
								if(isset($_POST["submit"])){
									if (strlen($nombre) >= 2 && strlen($nombre) <= 30) {
										echo $nombre;
									}else{
										echo "";
									}
								}else{
									echo "";
								}
								?>" 
								
							>
							<br>
							<input id="nick" type="text" name="nick" placeholder="Apodo/nick" value="<?php 
								if(isset($_POST["submit"])){
									if ( strlen($nick) >= 3 && strlen($nick) <= 20) {
										echo $nick;
									}else{
										echo "";
									}
								}else{
									echo "";
								}
								?>"
							>
							<br>
							<input id="correo" type="email" name="correo" placeholder="Correo electrónico" value="<?php 
								if(isset($_POST["submit"])){
									if (strpos($correo,'@') && strpos($correo,'.') && strlen($correo) > 10){
										echo $correo;
									}else{
										echo "";
									}
								}else{
									echo "";
								}
								?>"
							>
							<br>
							<input id="pw" type="password" name="pw" placeholder="Contraseña" value="<?php 
								if(isset($_POST["submit"])){
									if (strlen($pw) > 8 && $pw == $pw2 && !empty($correo) && strpos($correo,'@') && strpos($correo,'.') && strlen($correo) > 10) {
										echo $pw;
									}else{
										echo "";
									}
								}else{
									echo "";
								}
								?>"
							>
							<br>
							<input id="pw2" type="password" name="pw2" placeholder="Repite la contraseña" class="pw2" value="<?php 
								if(isset($_POST["submit"])){
									if (strlen($pw) > 8 && $pw == $pw2 && !empty($correo) && strpos($correo,'@') && strpos($correo,'.') && strlen($correo) > 10) {
										echo $pw2;
									}else{
										echo "";
									}
								}else{
									echo "";
								}
								?>"
							>
						</div>
					</div>
					

					<div class="login" id="login">
						<div style="width: 100%;">
							<input type="submit" id="isEnviado" class = "submit" name = "submit" value="Registarse">

							<!--ENLACE DE LOGIN-->
							<div class="centrarenlaces2">
								<div id="loginenlace2" onclick=" return loginenlace()">
									<p>¿Ya tienes una cuenta?</p>
									<a href="login.php">Iniciar sesión</a>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php if ($mostrarErrores == 1) { ?>

<div class="overlayPHP"></div>
<div class="erroresPHP">
	<div>
		<h2>Errores en la conexión</h2>
		<div style="padding: 0px 30px;">
			<?php
				echo "<p id='errorestextoPHP'> $textoError </p>";
			?>
		</div>
		<a href="#" class="aceptarerroresPHP">Aceptar</a>
	</div>
</div>
		
<?php } ?>

</body>
<?php } ?>
</html>
