<?php
/*
 File name: EPlanilhaSerieIncompativel.php
 File description: exception for series
 Authors: Lucas Andrade, Eduardo Augusto, S�rgio Bezerra, Lucas Carvalho, Eliseu
*/
class EPlanilhaSerieIncompativel extends Exception{
	
	public function __construct(){
		$this->message = "Esta planilha n�o e de serie historica!";
	}
}