<?php

class Administrador extends Usuario{
    
    public function __construct(){
		$this->logado = false;
		$this->nivel = 1;
	}
}

?>