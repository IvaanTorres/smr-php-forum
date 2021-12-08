<?php
	/* Namespace alias. */
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require '../../lib/PHPMailer-master/src/Exception.php';
	require '../../lib/PHPMailer-master/src/PHPMailer.php';
	require '../../lib/PHPMailer-master/src/SMTP.php';

	/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
	$mail = new PHPMailer(TRUE);

	/* Open the try/catch block. */
	try {
		/* Set the mail sender. */
		$mail->setFrom('MAIL WHICH SENDS THE EMAIL', 'TITLE'); //! IMPORTANT

		/* Add a recipient. */
		$mail->addAddress($correo, $nick);

		/* Set the subject. */
		$mail->isHTML(TRUE);

		$mail->Subject = 'Verificar correo - TravelEarth Exploring';

		/* Set the mail message body. */ //! IMPORTANT - SET THE CORRECT PC IP TO GET IN FROM THE MOBILE
		$mail->Body = "
		<h1>Bienvenid@ ".$nick."</h1>
		</br>
		<p>Esto es un mensaje automático, simplemente sirve para confirmar tu correo que has registrado en TravelEarth.</p>
		<p>Por favor, no conteste.</p>
		</br>
		<p>Para confirmar su correo pulse el siguiente boton:</p>
		<button><a href='http://192.168.0.111/forum-php-embedded/src/web/php/form/registroConfirmado.php?IdEmail=$correo'>Verificar correo</a></button>
		";
		
		/* SMTP parameters. */

		/* Tells PHPMailer to use SMTP. */
		$mail->isSMTP();

		/* SMTP server address. */
		$mail->Host = 'smtp.gmail.com';

		/* Use SMTP authentication. */
		$mail->SMTPAuth = TRUE;

		/* Set the encryption system. */
		$mail->SMTPSecure = 'tls';

		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);

		/* SMTP authentication username. */
		$mail->Username = 'MAIL WHICH SENDS THE EMAIL'; //! IMPORTANT

		/* SMTP authentication password. */
		$mail->Password = 'MAIL SENDER PASSWORD'; //! IMPORTANT

		/* Set the SMTP port. */
		$mail->Port = 587;

		/* Enable SMTP debug output. */
		$mail->SMTPDebug = 0;

		/* Finally send the mail. */
		$mail->send();
		$mostrarErrores = 0;
		header("Location:registroCompletado.php");

	}catch (Exception $e){
	/* PHPMailer exception. */
	$textoError .= $e->errorMessage();
	/* PHP exception. */
	$textoError .= $e->getMessage();
	$mostrarErrores = 1;
	}
?>