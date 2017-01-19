<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" href="bootstrap.css" />
	
	<script src="./js/jquery-3.1.1.js"></script>
	<script src="./js/funcoes.js"></script>
	<script src="./js/jquery.validate.js"></script>

	<style>
       .error{
             color:red
       }
	</style>

</head>
<body>

	<div class="col-xs-4 col-xs-offset-4">
		<h2 align="center">Cadastro de Alunos</h2>

		<form name="cadastro" id="cadastro" method="post" action="validacao.php">
		
		 	<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" name="nome" 	id="nome" class="form-control">
			</div>

			 <div class="col-xs-8">
				<div class="form-group">
					<label for="rua">Rua:</label>
					<input type="text" name="rua" id="rua" class="form-control">
				</div>
			</div>

			<div class="col-xs-4">
				<div class="form-group">
					<label for="numero">Nº</label>
					<input type="text" name="numero" id="numero" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label for="complemento">Complemento:</label>
				<input type="text" name="complemento" class="form-control">
			</div>

			<div class="col-xs-4">
				<div class="form-group">
					<label>Cidade:</label>
					<div id="listaCidades">
						<select name= "listaCidades" class="form-control">
							<option value="João Monlevade">João Monlevade</option>
							<option value="Itaúna">Itaúna</option>
							<option value="Itabira">Itabira</option>
							<option value="Belo Horizonte">Belo Horizonte</option>
							<option value="Alvinópolis">Alvinópolis</option>
						</select>
					</div>
				</div>
			</div>

			<div class="col-xs-2">
				<div class="form-group">
					<label>Estado:</label>
					<div id="listaEstados">
						<select name="listaEstados" class="form-control">
							<option value="AC">AC</option>
							<option value="AL">AL</option>
							<option value="AP">AP</option>
							<option value="AM">AM</option>
							<option value="BA">BA</option>
							<option value="CE">CE</option>
							<option value="DF">DF</option>
							<option value="ES">ES</option>
							<option value="GO">GO</option>
							<option value="MA">MA</option>
							<option value="MT">MT</option>
							<option value="MS">MS</option>
							<option value="MG">MG</option>
							<option value="PA">PA</option>
							<option value="PB">PB</option>
							<option value="PR">PR</option>
							<option value="PE">PE</option>
							<option value="PI">PI</option>
							<option value="RJ">RJ</option>
							<option value="RN">RN</option>
							<option value="RS">RS</option>
							<option value="RO">RO</option>
							<option value="RR">RR</option>
							<option value="SC">SC</option>
							<option value="SP">SP</option>
							<option value="SE">SE</option>
							<option value="TO">TO</option>
						</select>
					</div>
				</div>
			</div>

			<div class="col-xs-6">
				<div class="form-group">
					<label for="cep">Cep:</label>
					<input type="text" name="cep" id="cep" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label for="telefone">Telefone:</label>
				<input type="text" name="telefone" id="telefone" class="form-control">
			</div>

			<div class="form-group">
				<label for="celular">Celular:</label>
				<input type="text" id="celular" class="form-control">
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="text" name="email" id="email" class="form-control">
			</div>

			<div class="form-group">
				<label for="cep">CPF:</label>
				<input type="number" name="cpf" id="cpf" class="form-control">
			</div>

			<div class="form-group">
				<label for="usuario">Usuário</label>
				<input type="text" name="usuario" id="usuario" class="form-control">
			</div>

			<div class="form-group">
				<label for="senha">Senha</label>
				<input type="password" name="senha" id="senha" class="form-control" minlength="8" >
			</div>

			<div class="form-group">
				<label for="cSenha">Confirmação de Senha</label>
				<input type="password" name="cSenha" id="cSenha" class="form-control"  minlength="8">
			</div>
 
			<div class="form-group">
				<label>Gênero</label>
				<div class="radio">
					<label><input type="radio" name="genero" value="Feminino"> Feminino</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="genero" value="Masculino" > Masculino</label>
				</div>
			</div>

			<div class="form-group">
				<label>Área de Interesse:</label>
				<div class="checkbox">
					<label><input type="checkbox" name="area[]" value="Web">Web</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="area[]" value="BD">BD</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="area[]" value="Redes">Redes</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="area[]" value="Eng. Software">Eng. Software</label>
				</div>
			</div> 

			<div class="col-xs-6">
				<input type="submit" value="Cadastrar" class="btn btn-primary btn-block">
			</div>
			<div class="col-xs-6">
				<input type = "reset" value = "Limpar" class="btn btn-danger btn-block" />
			</div>
			<br><br>
		</form>

	</div>
	
</body>
</html>



