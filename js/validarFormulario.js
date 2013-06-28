$(function(){
	$('#contactForm').validate({
		rules : {
			nombre : { 
				required: true,
				minlength: 3
			},
			email : {
				required: true,
				email: true
			},
			asunto : {
				required: true,
				minlength: 7
			},
			mensaje : {
				required: true,
				minlength:10
			}
		},
		messages : {
			nombre : {
				required : "Debe ingresar un nombre",
				minlength : "El nombre debe tener minimo 3 caracteres"
			},
			email : {
				required : "Debe ingresar el Correo electrónico",
				email : "Debe ingresar un Correo electrónico valido"
			},
			asunto : {
				required : "Debe ingresar un asunto",
				minlength : "El asunto debe tener un minimo de 7 caracteres"
			},
			mensaje : {
				required : "Debe ingresar el mensaje",
				minlength : "El mensaje debe tener un minimo de 10 caracteres"
			}
		}
	});
});