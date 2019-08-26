<?php

include('DB.php');
include('Utils.php');

Utils::criarUsuario('administrador@teste.com','teste',1);
Utils::criarUsuario('usuario@teste.com','teste',2);
Utils::criarUsuario('espectador@teste.com','teste',3);


?>