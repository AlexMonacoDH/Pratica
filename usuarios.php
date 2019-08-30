<?php

//Incluindo dependências
include('./req/Espectador.php');
include('./req/DB.php');
include('./req/Usuario.php');
include('./req/Administrador.php');


	//Iniciar session
	session_start();

	//Verificar existência da session usuário
	if($_SESSION['usuario']){

		//Usuário existe. Recuperando o usuário
		$usuarioLogado = unserialize($_SESSION['usuario']);

		//Listar usuários da base de dados
		$usuarios = $usuarioLogado->listarUsuarios();
		//echo('<pre>');
		//var_dump($usuarios);
		//echo('</pre>');
		//die();
	}
	else{
		//Usuário não existe. Matando o script
		die();
	}
if($_POST){
	if(get_class($usuarioLogado) == 'Administrador'){
		$usuarioLogado->bloquearUsuario($_POST['id']);
	}
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<style>
		ul {
			padding: 0;
			margin: 0;
		}

		ul li{
			border-top: 1px solid #EEE;
			padding: 10px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			cursor: pointer;
		}

		ul li button{
			opacity: 0;
			transition: opacity linear 0.3s;
		}

		ul li:hover button{
			opacity: 1;
		}

		form {
			display: inline;
		}
	</style>
</head>
<body>
	<ul>
		<?php foreach($usuarios as $u): ?>
			<li>
				<span <?= $u['bloqueado'] == 1 ? 'style="color:#CCC"' : ''; ?>><?= $u['email'] ?></span>
				<form method="post">
					<input type="hidden" name="id" value="<?= $u['id'] ?>">
					<?php if(get_class($usuarioLogado) == 'Administrador'): ?>
						<button type="submit" class="btn-floating btn-small waves-effect waves-light">
							<i class="material-icons">close</i>
						</button>
					<?php endif; ?>
				</form>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>