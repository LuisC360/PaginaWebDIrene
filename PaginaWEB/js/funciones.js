$(document).ready(function () {

		$('#dologin').on('click', function (e) {
			e.preventDefault();
			
			var user= $('#user').val();			
			var pass= $('#pass').val();
			
			if (user == "") {
					$("input#user").focus();
					return false;
					}
			else{
				$("label#user_error").hide();
				$("label#user_error").hide();
			}
			
			if (pass == "") {
					$("input#pass").focus();
					return false;
					}else if (pass <= 3 ) {
						$("input#pass").focus();	
						return false;		
						}else if (pass >= 20) {
							$("input#pass").focus();	
							return false;		
						}
			else{
				$("label#pass_error").hide();
				$("label#pass_error2").hide();
			}
			
			$.ajax({
				type: "POST",
				url: "php/login.php",
				data: ( 'user=' +user+ '&pass=' +pass ),
				beforeSend: function () {
					$('#mensajes2').html('Procesando Datos...');
				},
				success: function (respuesta) {
					if (respuesta==1) {
						$('#mensajes2').html('Redireccionando espera un momento');
						$('#user').val("");
						$('#pass').val("");
						setTimeout(' window.location.href = "sistema.php"; ',2000);
					}else {
						$('#mensajes2').html('Datos Incorrectos');
						$('#user').val("");
						$('#pass').val("");
						setTimeout(' window.location.href = "index.php"; ',2000);
					}
				}
			});
		});
		
		$('#doreg').on('click', function (e) {
			e.preventDefault();
			
			var permitidos = "/^([a-z ñáéíóú]{2,60})$/i"; 
			var tpermit = "/^([0-9]+){9}$/";
			
			var tipo= $('#tipo').val();
			var name= $('#name').val();			
			var dir= $('#dir').val();
			var tel= $('#tel').val();
			var user= $('#user').val();
			var pass= $('#pass').val();
	
				if (name == "") {
					$("input#nombre").focus();
					return false;
					}else if ( name <= 3 ) {
								$("input#name").focus();	
								return false;		
								}else if ( permitidos.match(name) ) {
									$("input#name").focus();	
									return false;		
								}
			   else{
					$("label#name_error").hide();
					$("label#name_error2").hide();
					$("label#name_error3").hide();
				}
				
				if (dir == "") {
					$("input#dir").focus();
					return false;
					}else if ( dir <= 3 ) {
								$("input#dir").focus();	
								return false;		
								}else if ( permitidos.match(dir) ) {
									$("input#dir").focus();	
									return false;		
								}
			   else{
					$("label#dir_error").hide();
					$("label#dir_error2").hide();
					$("label#ndir_error3").hide();
				}
				
				if (tel == "") {
					$("input#tel").focus();
					return false;
					}else if ( tel <= 9 ) {
								$("input#tel").focus();	
								return false;		
								}else if (!(tpermit.test(tel))) {
									$("input#tel").focus();	
									return false;		
								}
			   else{
					$("label#tel_error").hide();
					$("label#tel_error2").hide();
				}
				
				if (user == "") {
					$("input#user").focus();
					return false;
					}else if ( user <= 3 ) {
								$("input#user").focus();	
								return false;		
								}else if (!(permitidos.test(user))) {
									$("input#user").focus();	
									return false;		
								}
			   else{
					$("label#user_error").hide();
					$("label#user_error2").hide();
				}
				
				if (pass == "") {
					$("input#pass").focus();
					return false;
					}else if (pass <= 3 ) {
								$("input#pass").focus();	
								return false;		
								}else if (pass >= 20) {
									$("input#pass").focus();	
								return false;		
								}
			   else{
					$("label#pass_error").hide();
					$("label#pass_error2").hide();
				}
			
			$.ajax({
				type: "POST",
				url: "php/registrar.php",
				data: 'tipo=' +tipo+ '&name=' +name+ '&dir=' +dir+ '&tel=' +tel+ '&user=' +user+ '&pass=' +pass,
				beforeSend: function () {
					$('#mensajes').html('Procesando Datos...');
				},
				success: function (respuesta) {
					if (respuesta==1) {
						$('#mensajes').html('Registro Exitoso, redireccionando');
						$('#tipo').val("");
						$('#name').val("");
						$('#dir').val("");
						$('#tel').val("");
						$('#user').val("");
						$('#pass').val("");
						setTimeout(' window.location.href = "index.php"; ',2000);
					}else {
						$('#mensajes').html('Este usuario ya ha sido registrado');
						$('#user').val("");
					}
				}
			});
		});
	})