$( document ).ready( function() {

	$("#cadastro").validate({
		
		rules:{
			nome:{
				required: true
			},

			rua:{
				required: true
			},
			
			numero:{
				required: true
			},
			
			cep:{
				required: true
			},
			
			telefone:{
				required: true
			},

			email:{
				required: true
			},

			cpf:{
				required: true
			},

			usuario:{
				required: true
			},

			senha:{
				required: true

			},

			cSenha:{
				required: true,
				equalTo: "#senha"
			},	

		},
	
	
		messages:{
			nome:{
				required: "Por favor, digite o nome para prosseguir!"
			},
			
			rua:{
				required: "Por favor, digite a rua para prosseguir!"
			},

			numero:{
				required: "Campo número necessário!"
			},

			cep:{
				required: "Campo cpf necessário!"
			},

			telefone:{
				required: "Campo telefone necessário"
			},

			email:{
				required: "Campo email necessário"
			},

			cpf:{
				required: "Por favor, informe o seu cpf!"
			},

			usuario:{
				required: "Campo ID de usuário necessário!"
			},

			senha:{
				minlength: "senha com 8 caracteres",
				required: "Campo senha é obrigatório!"
			},

			cSenha:{
				minlength: "senha com 8 caracteres",
				required: "Campo de confirmação de senha é obrigatório!",
				equalTo: "As senhas devem ser iguais!"
			}
		}
	
	
	});

});
