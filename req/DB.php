<?php 

class DB extends PDO{

	// Constantes privadas
	const host = '127.0.0.1';
	const dbname = 'chat';
	const port = 3307;
	const usuario = 'root';
	const senha = '';

	// Construct que chama a construct do pai
	public function __construct(){
		parent::__construct('mysql:host='.self::host.';dbname='.self::dbname.';port='.self::port, self::usuario, self::senha);
		parent::setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}

}