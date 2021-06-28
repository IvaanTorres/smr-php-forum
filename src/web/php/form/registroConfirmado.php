<?php
//Set variables
$mostrarForm = false;
$ID_email = $_GET["IdEmail"];
require 'conexion.php';

//Set new SQL Connection
$con = new mysqli($host,$user,$pass,$db);

//Check if verified Mail exists in DB
$resultadoSelect = "SELECT * FROM login WHERE correo='$ID_email' AND login = 1";
$querySelect = $con->query($resultadoSelect);
if ($querySelect->num_rows>0){
	//The mail has been already verified
	echo "TU CORREO YA HA SIDO CONFIRMADO TIEMPO ANTRÁS";
	$mostrarForm = false;
}else{
	//The mail has not been verified yet
	if (!$con) {
	$mostrarForm = false;
	}else{
		//Update 'login' field in DB from 0 to 1.
		$queryChange = "UPDATE login SET login=1 WHERE correo='$ID_email'";
		$resultadoChange = $con->query($queryChange);
		if (!$resultadoChange) {
			//If the UPDATE sentence has had a problem
			echo "HA HABIDO ALGÚN PROBLEMA AL INTENTAR CONFIRMAR TU CORREO";
		}else{
			//If the UPDATE sentence has been done, show the website.
			$mostrarForm=true;
		}
	}
}


?>

<?php 
if ($mostrarForm == true) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro confirmado - TravelEarth</title>
	<link rel="shortcut icon" href="../../assets/img/logo/logoetiqueta.png" />
	<meta name="viewport" content="width=device-width, initalscale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../../css/form/registroConfirmado.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
	<div class="cuerpo">
		<div class="overlay"></div>
		<div class="contenedor">
			<div class="texto">
				<div>
					<h1>¡Cuenta confirmada!</h1>
					<h2>¡Tu cuenta ha sido confirmada y ya puedes comenzar a utilizarla! <br> ¡Inicia sesión en TravelEarth y disfruta de muchísimo contenido actualizado <br> y creado por nuestra gran comunidad! </h2>
				</div>
			</div>
			<div class="enlace">
				<a href="https://www.gmail.com" target="_blank">Acceder a Email</a>
				<a href="../form/login.php" target="_blank">Iniciar sesión</a>
			</div>
		</div>
	</div>
</body>
</html>

<?php
}
?>