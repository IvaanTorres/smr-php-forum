$(document).ready(function(){
	$("#submitProblema").click(function(){
		var correoProblema = $("#correoProblema").val();
		var textoProblema = $("#mensaje").val();
		var textoProblema_long = textoProblema.length;
		var correoProblema_long = correoProblema.length;

		var mailRegularProblema = /^[a-zA-Z._0-9]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
		var validar_email_Problema = $("#correoProblema").val().match(mailRegularProblema);

		$("#correoProblema").css("border-color", "black");
		$("#correoProblema").css("border-style", "solid");
		$("#correoProblema").css("border-width", "1px");

		$("#mensaje").css("border-color", "black");
		$("#mensaje").css("border-style", "solid");
		$("#mensaje").css("border-width", "1px");

		$("#error1").html("");
		$("#error2").html("");

		if (textoProblema_long == 0 || correoProblema_long == 0 || textoProblema_long > 450 || 
			textoProblema_long < 50 || !validar_email_Problema || correoProblema_long < 10) {
				
			//VALIDACIÓN DE CORREO

			if (correoProblema_long == 0) {
				$("#correoProblema").css("border-color", "red");
				$("#correoProblema").css("border-style", "solid");
				$("#correoProblema").css("border-width", "1px");

				$("#error1").html("Correo vacío");
			}else{
				if (correoProblema_long < 10 && validar_email_Problema) {
					$("#correoProblema").css("border-color", "red");
					$("#correoProblema").css("border-style", "solid");
					$("#correoProblema").css("border-width", "1px");

					$("#error1").html("Correo muy corto");
				}
				if (correoProblema_long < 10 && !validar_email_Problema) {
					$("#correoProblema").css("border-color", "red");
					$("#correoProblema").css("border-style", "solid");
					$("#correoProblema").css("border-width", "1px");

					$("#error1").html("Correo muy corto y formato inválido");
				}
				if (correoProblema_long >= 10 && !validar_email_Problema) {
					$("#correoProblema").css("border-color", "red");
					$("#correoProblema").css("border-style", "solid");
					$("#correoProblema").css("border-width", "1px");

					$("#error1").html("Formato de correo inválido");
				}
			}

			//VALIDACIÓN DE COMENTARIO
			
			if (textoProblema_long == 0) {
				$("#mensaje").css("border-color", "red");
				$("#mensaje").css("border-style", "solid");
				$("#mensaje").css("border-width", "1px");

				$("#error2").html("Comentario vacío");
			}else{
				if (textoProblema_long > 450) {
					$("#mensaje").css("border-color", "red");
					$("#mensaje").css("border-style", "solid");
					$("#mensaje").css("border-width", "1px");

					$("#error2").html("Comentario muy largo (máximo 450 caracteres)");
				}
				if (textoProblema_long < 50) {
					$("#mensaje").css("border-color", "red");
					$("#mensaje").css("border-style", "solid");
					$("#mensaje").css("border-width", "1px");

					$("#error2").html("Comentario muy corto (mínimo 50 caracteres)");
				}
			}

		}else{
			$("#formProblema").submit();
		}

		
	})

})
