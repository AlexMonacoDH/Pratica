<?php

include('./req/DB.php');
include('./req/Espectador.php');
include('./req/Usuario.php');
include('./req/Administrador.php');

session_start();
//Verificando se a session usuario está setada
if($_SESSION['usuario']){
	//Carregando o usuário a partir da session
	$u = unserialize($_SESSION['usuario']);
	//Interrompendo o script caso o usuário esteja bloqueado
	if($u->estaBloqueado()){
		die('Usuário bloqueado');
	}
}
else{
	//Session inexistente. Matando o script
	die();
}

//Tratar o post
if($_POST){
	if(get_class($u != 'Espectador')){
		//Enviando mensagem para o banco de dados
		$u->enviarMensagem($_POST['texto']);
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
</head>
<body>
	<?php if(get_class($u) == 'Espectador'): ?>
		<div>Você está logado como espectador.</div>
		<?php else: ?>
		<form method="post">
			<div class="form-group">
				<input type="text" class="form-control" id="texto" name="texto">
			</div>
			<button type="submit" class="btn right">Enviar</button>
		</form>
	<?php endif; ?>
</body>
</html>