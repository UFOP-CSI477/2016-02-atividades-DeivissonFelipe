$( document ).ready( function() {

	$("#cadastro").validate({
		rules:{
			login:{
				required: true
			},

			senha:{
				required: true
			},

			nome:{
				required: true
			},

			cSenha:{
				required: true,	
				equalTo: "#senha"
			}

		},

		messages:{
			login:{
				required: "Por favor, digite o login para prosseguir!"
			},
			
			senha:{
				required: "Por favor, digite a senha para prosseguir!",
				minlength: "senha precisa de 8 caracteres"
			},

			nome:{
				required: "Por favor, digite a nome para prosseguir!"
			},

			cSenha:{
				required: "Por favor, digite a confirmação de senha para prosseguir!",	
				minlength: "senha precisa de 8 caracteres",
				equalTo: "As senhas devem ser iguais!"
			}
		}

	});


	$("#incluirExame").validate({

		rules:{
			data:{
				required: true
			}
		},

		messages:{

			data:{
				required: "Por favor, digite a data para prosseguir!",				
			}
		}

	});

	$("#crud").validate({

		rules:{
			nome:{
				required: true
			},

			preco:{
				required: true	
			}

		},

		messages:{

			nome:{
				required: "Por favor, digite o nome para prosseguir!",				
			},

			preco:{
				required: "Por favor, digite o preço para prosseguir!",					
			}
		}

	});

	$("#alterarPreco").validate({

		rules:{
			nome:{
				required: true
			},

			preco:{
				required: true	
			}

		},

		messages:{

			nome:{
				required: "Por favor, digite o nome para prosseguir!"

			},

			preco:{
				required: "Por favor, digite o preço para prosseguir!"
			}
		}

	});

	$("#alterarAdmin1").validate({

		rules:{
			nome:{
				required: true
			},

			preco:{
				required: true	
			}

		},

		messages:{

			nome:{
				required: "Por favor, digite o nome para prosseguir!"

			},

			preco:{
				required: "Por favor, digite o preço para prosseguir!"
			}
		}

	});


});
