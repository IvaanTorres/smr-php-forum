$(document).ready(function(){
	/* -------------------------------------------------------------------------- */
	/*                TRANSICIÓN DEL DIV DE ADVERTENCIA JAVASCRIPT                */
	/* -------------------------------------------------------------------------- */

	$("#aceptarerrores").click(function(){
		$("#errores").css("transform", "translateY(-100%)");
		$("#errores").css("transition", "0.8s");

		$(".overlay").css("opacity", "0");
		$(".overlay").css("transition", "0.8s");
		$(".overlay").css("z-index", "0");
	})

	/* -------------------------------------------------------------------------- */
	/*                    TRANSICIÓN DEL DIV DE ADVERTENCIA PHP                   */
	/* -------------------------------------------------------------------------- */

	$(".aceptarerroresPHP").click(function(){
		$(".erroresPHP").css("display", "none");

		$(".overlayPHP").css("opacity", "0");
		$(".overlayPHP").css("transition", "0.4s");
		$(".overlayPHP").css("z-index", "0");
	})

	/* -------------------------------------------------------------------------- */
	/*                     VALIDACIÓN DEL FORMULARIO REGISTRO                     */
	/* -------------------------------------------------------------------------- */

	$("#isEnviado").click(function(){

		//DECLARACIÓN DE VARIABLES

		var nombre = $("#nombre").val();
		var nick =  $("#nick").val();
		var correo =  $("#correo").val();
		var pw =  $("#pw").val();
		var pw2 =  $("#pw2").val();

		var nombreRegular = /^[a-z A-Z]{2,30}$/;
		var nickRegular = /^[a-zA-Z0-9._-]{3,20}$/;
		var mailRegular = /^[a-zA-Z._0-9]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

		var validar_nombre = $("#nombre").val().match(nombreRegular);
		var validar_nick = $("#nick").val().match(nickRegular);
		var validar_email = $("#correo").val().match(mailRegular);

		var countNombre = nombre.length;
		var countNick =  nick.length;
		var countMail =  correo.length;
		var countpw =  pw.length;

		//RESETEAR CSS DE INPUTS Y LIMPIAR DIV DE ADVERTENCIA
		
		$("#nombre").css("border-color", "black");
		$("#nombre").css("border-style", "solid");
		$("#nombre").css("border-width", "1px");

		$("#nick").css("border-color", "black");
		$("#nick").css("border-style", "solid");
		$("#nick").css("border-width", "1px");

		$("#correo").css("border-color", "black");
		$("#correo").css("border-style", "solid");
		$("#correo").css("border-width", "1px");

		$("#pw").css("border-color", "black");
		$("#pw").css("border-style", "solid");
		$("#pw").css("border-width", "1px");

		$("#pw2").css("border-color", "black");
		$("#pw2").css("border-style", "solid");
		$("#pw2").css("border-width", "1px");

		$("#errorestexto").empty();

		//VALIDACIÓN DE ERRORES

		if(nombre == "" || nick == "" || correo == "" ||
		   pw == "" || pw2 == "" || !validar_nombre || !validar_nick ||
		   !validar_email || pw != pw2 || countpw < 8){

				//CONFIRMAR VALORES NO VACÍOS

			   if(nombre == "" || nick == "" || correo == "" ||
			   pw == "" || pw2 == ""){
			   	
				$("#errorestexto").append("Hay algunos campos vacíos" + "</br>");

				}
				if(!validar_nombre){

					$("#nombre").css("border-color", "red");
					$("#nombre").css("border-width", "2px");
					if(countNombre < 2){
						$("#errorestexto").append("El nombre es muy pequeño" + "</br>");
					}else if (countNombre > 30){
						$("#errorestexto").append("El nombre es demasiado grande" + "</br>");
					}
				}
				if(!validar_nick){

					$("#nick").css("border-color", "red");
					$("#nick").css("border-width", "2px");
					if(countNick < 3){
						$("#errorestexto").append("El nick es muy pequeño" + "</br>");
					}else if (countNick > 20){
						$("#errorestexto").append("El nick es demasiado grande" + "</br>");
					}
				}
				if(!validar_email){

					$("#correo").css("border-color", "red");
					$("#correo").css("border-width", "2px");

					$("#errorestexto").append("El email tiene un formato incorrecto" + "</br>");

				//VALIDAR CONTRASEÑAS

				}
				if(pw != pw2){

					$("#pw").css("border-color", "red");
					$("#pw2").css("border-color", "red");
					$("#pw").css("border-width", "2px");
					$("#pw2").css("border-width", "2px");

					$("#errorestexto").append("Las contraseñas no coinciden" + "</br>");
				}
				if(countpw < 8){

					$("#pw").css("border-color", "red");
					$("#pw").css("border-width", "2px");

					$("#errorestexto").append("La contraseña es muy corta" + "</br>");

				}

			$("#errores").css("transform", "translateY(0%)");$("#errores").css("transition", "0.8s");$(".overlay").css("opacity", "0.2");$(".overlay").css("transition", "0.8s");$(".overlay").css("z-index", "100");

		}else{
			document.getElementById('formularioregistro').submit(); 
			return false;
		}
		return false;
	})


	/* -------------------------------------------------------------------------- */
	/*                       VALIDACIÓN DEL FORMULARIO LOGIN                      */
	/* -------------------------------------------------------------------------- */


	$("#submitlogin").click(function(){

		//DECLARAR VARIABLES

		var correoLogin = $("#correoLogin").val();
		var pwLogin = $("#pwLogin").val();

		var mailRegularLogin = /^[a-zA-Z._0-9]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
		var validar_email_Login = $("#correoLogin").val().match(mailRegularLogin);

		//FORMATEAR CAJA DE ERRORES E INPUTS
			
		$("#errorestexto").empty();

		$("#correoLogin").css("border-color", "black");
		$("#correoLogin").css("border-style", "solid");
		$("#correoLogin").css("border-width", "1px");

		$("#pwLogin").css("border-color", "black");
		$("#pwLogin").css("border-style", "solid");
		$("#pwLogin").css("border-width", "1px");

		//VALIDACIÓN DEL FORMULARIO

		if (correoLogin == "" || pwLogin == "" || !validar_email_Login) {
			if (correoLogin == "" && pwLogin == "") {
				$("#correoLogin").css("border-color", "red");
				$("#pwLogin").css("border-color", "red");
				$("#correoLogin").css("border-width", "2px");
				$("#pwLogin").css("border-width", "2px");

				$("#errorestexto").append("Los campos están vacíos. </br>");
			}else{
				if (correoLogin == "") {
					$("#correoLogin").css("border-color", "red");
					$("#correoLogin").css("border-width", "2px");

					$("#errorestexto").append("El campo de correo está vacío. </br>");
				}else if (pwLogin == "" && validar_email_Login) {
					$("#pwLogin").css("border-color", "red");
					$("#pwLogin").css("border-width", "2px");

					$("#errorestexto").append("El campo de contraseña está vacío. </br>");
				}else{
					if (!validar_email_Login && pwLogin == "") {
						$("#correoLogin").css("border-color", "red");
						$("#correoLogin").css("border-width", "2px");
						$("#pwLogin").css("border-color", "red");
						$("#pwLogin").css("border-width", "2px");

						$("#errorestexto").append("El formato de correo es incorrecto. </br>");
						$("#errorestexto").append("El campo de contraseña está vacío. </br>");
					}
					else if (!validar_email_Login && pwLogin != "") {
						$("#correoLogin").css("border-color", "red");
						$("#correoLogin").css("border-width", "2px");

						$("#errorestexto").append("El formato de correo es incorrecto. </br>");
					}
				}
			}

			$("#errores").css("transform", "translateY(0%)");$("#errores").css("transition", "0.8s");$(".overlay").css("opacity", "0.2");$(".overlay").css("transition", "0.8s");$(".overlay").css("z-index", "100");

		}else{
			document.getElementById('formulariologin').submit(); 
			return false;
		}
		return false;
	})
})