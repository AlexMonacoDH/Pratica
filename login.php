<?php

$mostrarMensagemDeErro = false;

if($_POST){
	//Incluindo os scripts
	include('./req/DB.php');
	include('./req/Espectador.php');
	include('./req/Usuario.php');
	include('./req/Administrador.php');

	switch ($_POST['nivel']) {

		case 3:
			//Criando o espectador
			$u = new Espectador();
			break;

		case 2:
			//Criando o usuário
			$u = new Usuario();
			break;
		
		case 1:
			//Criando o administrador
			$u = new Administrador();
			break;
		default:
			die('Nível inexistente...');
			break;
	}

	//Será que o login está certo?
	if($u->logar($_POST['email'],$_POST['senha'])){
		//echo('ok...login confere!');
		//inicia session
		session_start();

		//armazenando $u na session USUARIO
		$_SESSION['usuario'] = serialize($u);

		//ir para a home.php
		header('location: home.php');
	}
	else{
		$mostrarMensagemDeErro = true;
	}
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Chat de FS</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body class="teal">
	<form method="POST" class="row">
		<div class="col s12 m6 offset-m3">
			<div class="card">
				<div class="card-content">
					<span class="card-title"></span>
					
					<div class="input-field">
						<select name="nivel" class="invalid">
							<option value="3">Espectador</option>
							<option value="2">Usuário</option>
							<option value="1">Administrador</option>
						</select>
						<label>Nível do Usuário</label>
					</div>
					
					<div class="input-field">
						<!-- caso campo esteja inválido, adicionar class invallid -->
						<input placeholder="E-mail" type="email" name="email">
					</div>
					
					<div class="input-field">
						<input placeholder="Senha" type="password" name="senha">
						
						<?php if($mostrarMensagemDeErro): ?>
							<span class="helper-text red-text">Nível, email ou senha inválidos</span>
						<?php endif; ?>
					</div>
				</div>
				
				<div class="card-action">
					<button type="submit" class="waves-effect waves-light btn">Entrar</button>
				</div>
			</div>
		</div>
	</form>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
		document.addEventListener(
			'DOMContentLoaded',
			function() {
				var elems = document.querySelectorAll('select');
				var instances = M.FormSelect.init(elems, {});
			}
		);
	
	</script>
</body>
</html>