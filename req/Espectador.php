<?php
//include('DB.php');

class Espectador {

	protected $id;
	protected $email;
	protected $logado;
	protected $nivel;

	public function __construct(){
		$this->logado = false;
		$this->nivel = 3;
	}

	public function logar($email,$senha){

	
		//Criando conexão com o banco
		$db = new DB();
		
		//Definir a string da consulta
		$sql = "SELECT id,senha FROM usuarios WHERE email=:email";

		//Preparar a consulta
		$select = $db->prepare($sql);
		
		//Executa a consulta
		$select->execute(
			[
				':email'=>$email
			]
			);

		//Ler a consulta
		$result = $select->fetch(PDO::FETCH_ASSOC);
		if($result){
			if(password_verify($senha,$result['senha'])){
				$this->id = $result['id'];
				$this->email = $email;
				$this->logado = true;
				return true;
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}
	public function lerMensagens(){
		//Conectar com o DB
		$db = new DB();

		//Construir a string da consulta
		$sql = "SELECT m.id, u.email, m.texto, m.hora FROM mensagens m INNER JOIN usuarios u ON u.id = m.id_usuario";

		//Preparar a consulta
		$select = $db->prepare($sql);

		//Executar consulta
		$select->execute();

		//Ler resultado da consulta
		$mensagens = $select->fetchAll(PDO::FETCH_ASSOC);

		//Retornar as msgs
		return $mensagens;
	}
	public function getEmail(){
		return $this->email;
	}

}

/*$e = new Espectador();
if($e->logar('espectador@teste.com','teste')){
	echo 'Viva! Logou com sucesso!!!';
}
else{
	echo 'Não logou...';
}*/