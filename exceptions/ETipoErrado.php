<?php
/*
 File name: ETipoErrado.php
 File description: exception for type
 Authors: Lucas Andrade, Eduardo Augusto, S�rgio Bezerra, Lucas Carvalho, Eliseu
*/
class ETipoErrado extends Exception{

	public function __construct(){
		$this->message = "Erro no tipo de variavel";
	}
}