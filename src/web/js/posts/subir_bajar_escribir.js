$(document).ready(function(){
	$("#bajarcomentarios").click(function(){
		$(".escribir").toggleClass('cerrarEscribir');

		if($(".escribir").hasClass("cerrarEscribir")) {
			$("#bajarcomentarios").html("Bajar post");
			$("footer").css("margin-bottom", "220px");
		}else{
			$("#bajarcomentarios").html("Escribir post");
			$("footer").css("margin-bottom", "0px");
		}
	})



	$("#bajarcomentarios2").click(function(){
		$(".escribir").toggleClass('cerrarEscribir');

		if($(".escribir").hasClass("cerrarEscribir")) {
			$("#bajarcomentarios2").html("Bajar post");
			$("footer").css("margin-bottom", "220px");
		}else{
			$("#bajarcomentarios2").html("Escribir post");
			$("footer").css("margin-bottom", "0px");
		}
	})



	$("#submitpost").click(function(){
		var titulo = $(".titulotexto").val();
		var titulo_long = titulo.length;
		var post = $(".texto").val();
		var post_long = post.length;

		$(".texto").css("border", "solid 1px black");
		$(".titulotexto").css("border", "solid 1px black");

		if (titulo_long < 5 || titulo_long > 40 || titulo_long == 0 ||
			post_long < 50 || post_long > 450 || post_long == 0) {

			if (titulo_long < 5 || titulo_long > 40 || titulo_long == 0 &&
			post_long < 50 || post_long > 450 || post_long == 0) {
				$(".escribir").css("height", "260px");
			}

			if (titulo_long < 5 || titulo_long > 40 || titulo_long == 0) {
				if (titulo_long < 5) {
					$(".titulotexto").css("border", "solid 1px red");
					$(".texto").css("margin-top", "0px");
					$("#tituloerror").html("Campo muy corto");
				}
				if (titulo_long > 40) {
					$(".titulotexto").css("border", "solid 1px red");
					$(".texto").css("margin-top", "0px");
					$("#tituloerror").html("Campo muy largo");
				}
				if (titulo_long == 0) {
					$(".titulotexto").css("border", "solid 1px red");
					$(".texto").css("margin-top", "0px");
					$("#tituloerror").html("Campo vacío");
				}
			}else{
				$(".escribir").css("height", "240px");
				$(".titulotexto").css("margin-bottom", "4px");
				$(".titulotexto").css("border", "solid 1px black");
				$("#tituloerror").html("");
			}
				


			if (post_long < 50 || post_long > 450 || post_long == 0) {
				if (post_long < 50) {
					$(".texto").css("border", "solid 1px red");
					$(".texto").css("margin-bottom", "0px");
					$("#posterror").html("Campo muy corto");
				}
				if (post_long > 450) {
					$(".texto").css("border", "solid 1px red");
					$(".texto").css("margin-bottom", "0px");
					$("#posterror").html("Campo muy largo");
				}
				if (post_long == 0) {
					$(".texto").css("border", "solid 1px red");
					$(".texto").css("margin-bottom", "0px");
					$("#posterror").html("Campo vacío");
				}
			}else{
				$(".escribir").css("height", "240px");
				$(".texto").css("margin-bottom", "4px");
				$(".texto").css("border", "solid 1px black");
				$("#posterror").html("");
		}

	}else{
		$(".escribir").css("height", "230px");
		$(".texto").css("margin-bottom", "8px");
		$(".texto").css("margin-top", "8px");
		$("#tituloerror").html("");
		$("#posterror").html("");
		$("#posts").submit();
		$("#posts").trigger("reset");
	}
	
	})
})