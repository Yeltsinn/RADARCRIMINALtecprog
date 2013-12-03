<?php
include_once('C:/xampp/htdocs/mds2013/persistence/NaturezaDAO.php');
include_once('C:/xampp/htdocs/mds2013/persistence/CategoriaDAO.php');
include_once('C:/xampp/htdocs/mds2013/model/Natureza.php');
include_once('C:/xampp/htdocs/mds2013/model/Categoria.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/EErroConsulta.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/EFalhaNaturezaController.php');

class NaturezaController{
	private $naturezaDAO;
	
	public function __construct(){
		$this->naturezaDAO = new NaturezaDAO();
	}
	public function _listarTodas(){
		$resultado = $this->naturezaDAO->listarTodas();
		if(!is_array($resultado)){
			throw new EErroConsulta();
		}
		return $resultado;
	}
	public function _listarTodasAlfabicamente(){
		$resultado = $this->naturezaDAO->listarTodasAlfabicamente();
		if(!is_array($resultado)){
			throw new EErroConsulta();
		}
		return $resultado;
	}
	public function _consultarPorId($id){
		
		if(!is_numeric($id)){
			throw new EErroConsulta();
		}
		$natureza = $this->naturezaDAO->consultarPorId($id);
		if(get_class($natureza) != 'Natureza'){
			throw new EErroConsulta();
		}
		return $natureza;
	}
	public function _consultarPorNome($natureza){
		
		if(!is_string($natureza)){
			throw new EErroConsulta();
		}
		$natureza = $this->naturezaDAO->consultarPorNome($natureza);
		if(get_class($natureza) != 'Natureza'){
			throw new EErroConsulta();	
		}
		return $natureza;
	}
	public function _inserirNatureza(Natureza $natureza){
		return $this->naturezaDAO->inserirNatureza($natureza);
	}
	public function _inserirArrayParse($arrayNatureza){
		
		if(!is_array($arrayNatureza)){
			throw new EFalhaNaturezaController();
		}
		for($i=0,$arrayKey = $arrayNatureza,$inicio = 0;$i<count($arrayNatureza);$i++){
			$chave = key($arrayKey);
			$categoriaDAO = new CategoriaDAO();
			$dadosCategoria = new Categoria();
			$dadosCategoria = $categoriaDAO->consultarPorNome($chave);
			for($j=$inicio;$j<(count($arrayNatureza[$chave])+$inicio);$j++){
				$dadosNatureza = new Natureza();
				$dadosNatureza->__setNatureza($arrayNatureza[$chave][$j]);
				$dadosNatureza->__setIdCategoria($dadosCategoria->__getIdCategoria());
				$this->naturezaDAO->inserirNatureza($dadosNatureza);
			}
			$inicio = $inicio+count($arrayNatureza[$chave]);
			next($arrayKey);
		}
		return $dadosCategoria;
	}
}