function validarForm() {
	
	//nome
	if(document.getElementById('nome').value == null || document.getElementById('nome').value  == ""){
		alert("O campo nome é obrigatório. Por favor digite-o para prosseguir com o cadastro!");
		document.getElementById('nome').focus();
		return false;
	}
	
	//rua
	if(document.getElementById('rua').value == null || document.getElementById('rua').value  == ""){
		alert("O campo rua é obrigatório. Por favor digite-o para prosseguir com o cadastro");
		document.getElementById('rua').focus();
		return false;
	}

	//numero
	if(document.getElementById('numero').value == null || document.getElementById('numero').value == ""){
		alert("O campo número é obrigatório. Por favor digite-o para prosseguir com o cadastro");
		document.getElementById('numero').focus();
		return false;
	}
	else if(isNaN(document.getElementById('numero').value)){
		alert("Campo Inválido");
		document.getElementById('numero').focus();
		return false;
	}

	//complemento
	

	//cidade


	//estado


	//cep
	if(document.getElementById('cep').value == null || document.getElementById('cep').value == ""){
		alert("O campo cep é obrigatório. Por favor digite-o para prosseguir com o cadastro");
		document.getElementById('cep').focus();
		return false;
	}
	else if(isNaN(document.getElementById('cep').value)){
		alert("Por favor, digite apenas números");
		document.getElementById('cep').focus();
		return false;
	}

	//telefone
	if(isNaN(document.getElementById('telefone').value)){
		alert("Por favor, digite apenas números");
		document.getElementById('telefone').focus();
		return false;
	}		

	//celular
	if(isNaN(document.getElementById('celular').value)){
		alert("Por favor, digite apenas números");
		document.getElementById('celular').focus();
		return false;
	}

	//email
	if( document.getElementById('email').value == null || document.getElementById('email').value == ""){
		alert("O campo email é obrigatório. Por favor digite-o para prosseguir com o cadastro");
		document.getElementById('email').focus();
		return false;
	}

	//cpf
	if(document.getElementById('cpf').value == null || document.getElementById('cpf').value == ""){
		alert("O campo cpf é obrigatório. Por favor digite-o para prosseguir com o cadastro");
		document.getElementById('cpf').focus();
		return false;
	}
	else if(isNaN(document.getElementById('cpf').value)){
		alert("Campo Inválido");
		document.getElementById('cpf').focus();
		return false;
	}
	//usuario
	if(document.getElementById('usuario').value == null || document.getElementById('usuario').value == ""){
		alert("O campo usuario é obrigatório. Por favor digite-o para prosseguir com o cadastro");
		document.getElementById('usuario').focus();
		return false;
	}

	//senha
	if(document.getElementById('senha').value == null || document.getElementById('senha').value == ""){
		alert("O campo senha é obrigatório. Por favor digite-o para prosseguir com o cadastro");
		document.getElementById('senha').focus();
		return false;
	}
	else if (document.getElementById('senha').value.length > 8) {
     	alert("Senha maior do que o 8 caracteres!");
     	document.getElementById('senha').focus();
		return false;   
    } else if(document.getElementById('senha').value.length < 4) {
        alert("Senha menor do que o 4 caracteres!");
     	document.getElementById('senha').focus();
		return false;
    }

	//confirmação de senha
	if(document.getElementById('cSenha').value == null || document.getElementById('cSenha').value == ""){
		alert("Campo obrigatório. Por favor digite-o para prosseguir com o cadastro");
		document.getElementById('cSenha').focus();
		return false;
	}
	else if(document.getElementById('senha').value != document.getElementById('cSenha').value){
		alert("Senhas diferentes!");
		document.getElementById('cSenha').focus();
		return false;
	}

	//genero
	if((document.cadastro.genero[0].checked == false) && (document.cadastro.genero[1].checked == false)){
		alert("Por favor, selecione um gênero!");
		document.cadastro.genero[0].focus();
		return false;
	}

	//area de interesse
	
}