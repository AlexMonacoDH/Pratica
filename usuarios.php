<!DOCTYPE html>
<html lang="en">
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
		<li>
			<span>teste@teste.com</span>
			<form method="post">
				<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
				<button type="submit" class="btn-floating btn-small waves-effect waves-light">
					<i class="material-icons">close</i>
				</button>
			</form>
		</li>
		<li>
			<span>teste@teste.com</span>
			<form method="post">
				<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
				<button type="submit" class="btn-floating btn-small waves-effect waves-light">
					<i class="material-icons">close</i>
				</button>
			</form>
		</li>
		<li>
			<span>teste@teste.com</span>
			<form method="post">
				<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
				<button type="submit" class="btn-floating btn-small waves-effect waves-light">
					<i class="material-icons">close</i>
				</button>
			</form>
		</li>
		<li>
			<span>teste@teste.com</span>
			<form method="post">
				<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
				<button type="submit" class="btn-floating btn-small waves-effect waves-light">
					<i class="material-icons">close</i>
				</button>
			</form>
		</li>
		<li>
			<span>teste@teste.com</span>
			<form method="post">
				<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
				<button type="submit" class="btn-floating btn-small waves-effect waves-light">
					<i class="material-icons">close</i>
				</button>
			</form>
		</li>
		<li>
			<span>teste@teste.com</span>
			<form method="post">
				<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
				<button type="submit" class="btn-floating btn-small waves-effect waves-light">
					<i class="material-icons">close</i>
				</button>
			</form>
		</li>
		<li>
			<span>teste@teste.com</span>
			<form method="post">
				<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
				<button type="submit" class="btn-floating btn-small waves-effect waves-light">
					<i class="material-icons">close</i>
				</button>
			</form>
		</li>
	</ul>
</body>
</html>