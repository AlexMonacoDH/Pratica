<?php

	//Iniciar a session
	session_start();

	//Verificando se a session 'usuário' está configurada
	if($_SESSION['usuario']){
		
	}
	else{
		header('location: login.php');
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
	<style>
		body {
			display: grid;
			grid-template-columns: 300px 1fr 1fr;
		}

		#usuarios {
			margin: 0;
			padding: 0;
			overflow-y: auto;
			grid-row: 1/3;
		}

		#usuarios iframe{
			height:100%;
		}

		main {
			border-left: 1px solid #EEE;
			height: calc(100vh - 150px);
			grid-column: 2/4;
		}

		main iframe{
			width: 100%;
			height: 100%;
		}

		footer{
			grid-column: 2/4;
			height: 150px;
			border-top: 1px solid #EEE;
			padding: 30px;
			background-color: #EEE;
		}

		footer iframe {
			width: 100%;
			height: 110px;
		}

	</style>
</head>
<body>
	<div id="usuarios">
		<iframe src="usuarios.php" frameborder="0"></iframe>
	</div>

	<main>
		<iframe src="chat.php" frameborder="0"></iframe>
	</main>

	<footer>
		<iframe src="mensagem.php" frameborder="0"></iframe>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>