<?php
/*
 File name: ENomePlanilhaIncompativel.php
 File description: exception for parse
 Authors: Lucas Andrade, Eduardo Augusto, S�rgio Bezerra, Lucas Carvalho, Eliseu
*/
class ENomePlanilhaIncompativel extends Exception{
	
	public function __construct(){
		$this->message = "Planilha nao compativel com o parse!";
	}
}