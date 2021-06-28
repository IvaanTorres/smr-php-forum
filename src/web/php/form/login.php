<?php
$mostrarForm = false;
$mostrarErrores = 0;
$textoError = "";

if(isset($_POST['submit'])){
	$correo = $_POST["correoLogin"];
	$pw = $_POST["pw"];

	if (isset($correo) && !empty($correo) || isset($pw) && !empty($pw)) {
		
		if (empty($correo) || !strpos($correo,'@') && $correo != "" || !strpos($correo,'.') && $correo != "" || empty($pw)) {
			

			if (empty($correo)) {
				$textoError .= "<p>El correo está vacio.</p>";
			}
			if (!strpos($correo,'@') && $correo != "" || !strpos($correo,'.') && $correo != ""){
				$textoError .= "<p>Error en correo, formato incorrecto.</p>";
			}
			if (empty($pw)) {
				$textoError .= "<p>El valor PW está vacio.</p>";
			}

			$mostrarErrores = 1;
			$mostrarForm = true;

		}else{
			require "conexion.php";
			$con = new mysqli($host,$user,$pass,$db);
			$mailSelect = "SELECT * FROM login WHERE correo='$correo' AND login=1";

			if (!$con) {
				$textoError .= "<p>Fallo en la conexión con la base de datos</p>";
			}else{
				$queryMail = $con->query($mailSelect);
				if ($queryMail->num_rows>0) {

						$pwSelect=mysqli_fetch_assoc($queryMail);
						$pwVerify=password_verify($pw, $pwSelect['contrasenya']);

						if ($pwVerify) {
							//SESIONES
							session_start();
							$_SESSION['correo'] = $correo;
							
							header("Location:../inicio/inicio.php");
						}else{
							$textoError .= "<p>El usuario o contraseña es incorrecto</p>";
						}

				}else{
					$textoError .= "<p>Debes registrarte y confirmar tu correo para poder iniciar sesión</p>";
				}
			}
		}

		if ($textoError == "") {
			$mostrarErrores = 0;
		}else{
			$mostrarErrores = 1;
		}

		$mostrarForm = true;

	}else{
		$mostrarForm = true;
	}
}else{
	$mostrarForm = true;
}
?>

<?php
if ($mostrarForm == true){
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login Form</title>
	<link rel="shortcut icon" href="../../assets/img/logo/logoetiqueta.png" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initalscale=1.0, user-scalable=no">

	<link rel="stylesheet" type="text/css" href="../../css/form/login.css">

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
					<h1 id="titulo">¿Otra vez por aquí?</h1>
					<h2 id="subtitulo">¡Inicia sesión de vuelta en TravelEarth y ponte al día sobre el mundo que te rodea!</h2>
				</div>
				<div class="login2">
					<!--ENLACE DE LOGIN-->
					<div id="loginenlace">
						<p>¿Todavía no tienes una cuenta?</p>
						<a href="registro.php">Regístrate</a>
					</div>
				</div>
			</div>

			<!--FORMULARIO DEL APARTADO LOGIN-->
			<div class=cajaformulario id="cajaformulario">
				<div class="formregistro" id="formlogin">
					<form method="post" id="formulariologin" action="login.php">
						<div class="contenidoform" id="contenidoform2">
							<div class="enunciado">
								<h2>Inicar sesión</h2>
							</div>
							<div class="informacion">
								<input id="correoLogin" type="email" name="correoLogin" placeholder="Correo electrónico" value="<?php 
								if(isset($_POST['submit'])){
									if(empty($pw)){
										echo $correo;
									}
								}else{
									echo '';
								}
								?>">
								<br>
								<input id="pwLogin" type="password" name="pw" placeholder="Contraseña">
								<br>
							</div>
						</div>
						<div class="login" id="login2">
							<div style="width: 100%;">
								<input type="submit" id="submitlogin" class = "submit" name = "submit" value="Iniciar sesión">
								
								<!--ENLACE DE LOGIN-->
								<div class="centrarenlaces2">
									<!--ENLACE DE REGISTRO-->
									<div id="registroenlace3">
										<p>¿Todavía no tienes una cuenta?</p>
										<a href="registro.php">Regístrate</a>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php
}
?>

<?php
if ($mostrarErrores == 1) {
?>
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
</html>