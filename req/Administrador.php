<?php

class Administrador extends Usuario{
    
    public function __construct(){
		$this->logado = false;
		$this->nivel = 3;
	}
	public function bloquearUsuario($id){
		//Conectar ao banco de dados
		$db = new DB();
		//Construir a string consulta sql
		$sql = "UPDATE usuarios SET bloqueado=1 WHERE id=:id";
		//Preparar a consulta
		$update = $db->prepare($sql);
		//Executar a consulta
		$update->execute(
			[
				':id' => $id
			]
		);
	}
}

?>