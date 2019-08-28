<?php

include('Espectador.php');
include('DB.php');

class Usuario extends Espectador{
    
    public function __construct(){
		$this->logado = false;
		$this->nivel = 2;
	}
	
	public function enviarMensagem($texto){
		
		//Criando conexão com o banco
		$db = new DB();
		
		//Construindo string de consulta
		$sql = "INSERT INTO mensagens (id_usuario, hora, texto) VALUES (:id_usuario, NOW(),:texto)";
		
		//Preparar consulta
		$insert = $db->prepare($sql);
		
		//Executar consulta
		$insert->execute(
			[
				':id_usuario' => $this->id,
				':texto' => $texto
				]
			);
	}
}

$u = new Usuario();
$u->logar('usuario@teste.com','teste');
$u->enviarMensagem('Hello, testing!');

?>