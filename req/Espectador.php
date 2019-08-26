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
		$sql = "SELECT id FROM usuarios WHERE email=:email";

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
			$this->logado = true;
			return true;
		}
		else{
			return false;
		}
	}

}

/*$e = new Espectador();
if($e->logar('espectador@teste.com','teste')){
	echo 'Viva! Logou com sucesso!!!';
}
else{
	echo 'Não logou...';
}*/