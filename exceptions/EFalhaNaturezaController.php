<?php
/*
 File name: EFalhaNaturezaController.php
 File description: exception for kind functions
 Authors: Lucas Andrade, Eduardo Augusto, S�rgio Bezerra, Lucas Carvalho, Eliseu
*/
class EFalhaNaturezaController extends Exception{

	public function __construct(){
		$this->message = "Erro em alguma funcao na classe Natureza";
	}
}