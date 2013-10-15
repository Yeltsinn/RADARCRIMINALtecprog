<?php
require_once 'Parse.php';
include_once './controller/CategoriaController.php';
include_once './controller/CrimeController.php';
include_once './controller/NaturezaController.php';
include_once './controller/TempoController.php';
class RunParse{
	private $parse;
	private $categoriaCO;
	private $crimeCO;
	private $naturezaCO;
	private $tempoCO;
	public function __construct(){
		$this->categoriaCO = new CategoriaController();
		$this->crimeCO = new CrimeController();
		$this->naturezaCO = new NaturezaController();
		$this->tempoCO = new TempoController();
		$this->parse = new Parse("s�rie hist�rica - 2001 - 2012 2.xls");
		echo "Parse Efetuado com Sucesso!!<br>";
		$this->categoriaCO->_inserirCategoria($this->parse->__getCategoria());
		echo "Inseriu Categoria com Sucesso!!<br>";
		$this->tempoCO->_inserirTempo($this->parse->__getTempo());
		echo "Inseriu Tempo com sucesso!!<br>";
		$this->naturezaCO->_inserirNatureza($this->parse->__getNatureza());
		echo "Inseriu Natureza com sucesso!!<br>";
		$this->crimeCO->_inserirCrime($this->parse->__getCrime());
		echo "Inseriu Crime com sucesso!!<br>";
	}
}
