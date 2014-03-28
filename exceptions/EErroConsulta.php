<?php
/*
 File name: EErroConsulta.php
 File description: exception for consult
 Authors: Lucas Andrade, Eduardo Augusto, S�rgio Bezerra, Lucas Carvalho, Eliseu
*/
class EErroConsulta extends Exception{

	public function __construct(){
		$this->message = "Algo errado em sua consulta";
	}
}