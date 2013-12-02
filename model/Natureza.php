<?php
include_once('C:/xampp/htdocs/mds2013/exceptions/ETipoErrado.php');

class Natureza{
	private $idNatureza;
	private $natureza;
	private $idCategoria;
	
	public function __construct(){
		
	}
	public function __constructOverload($idNatureza,$nomeNatureza,$idCategoriaNatureza){
	
		if( (!is_numeric($idNatureza))|| (!is_string($nomeNatureza)) || (!is_numeric($idCategoriaNatureza)) ){
			throw new ETipoErrado();
		}
		$this->idNatureza = $idNatureza;
		$this->natureza = $nomeNatureza;
		$this->idCategoria = $idCategoriaNatureza;
	}
	public function __setIdNatureza($idNatureza){
		if(!is_numeric($idNatureza)){
			throw new ETipoErrado();
		}
		$this->idNatureza = $idNatureza;
	}
	public function __getIdNatureza(){
		
		if(!is_numeric($this->idNatureza)){
			throw new ETipoErrado();
		}
		return $this->idNatureza;
	}
	public function __setIdCategoria($idCategoria){
	
		if(!is_numeric($idCategoria)){
			throw new ETipoErrado();
		}
		$this->idCategoria = $idCategoria;
	}
	public function __getIdCategoria(){
		
		if(!is_numeric($this->idCategoria)){
			throw new ETipoErrado();
		}
		return $this->idCategoria;
	}
	public function __setNatureza($natureza){
		
		if(!is_string($natureza)){
			throw new ETipoErrado();
		}
		$this->natureza = $natureza;
	}
	public function __getNatureza(){
		
		if(!is_string($this->natureza)){
			throw new ETipoErrado();
		}
		return $this->natureza;
	}
}