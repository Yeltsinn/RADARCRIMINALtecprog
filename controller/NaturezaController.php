<?php
/*
 File name: NaturezaController.php
 File description: insert, consult, show and sum some kind informations
 Authors: Lucas Andrade, Eduardo, S�rgio, Lucas, Eliseu
*/

include_once('C:/xampp/htdocs/mds2013/persistence/NaturezaDAO.php');
include_once('C:/xampp/htdocs/mds2013/persistence/CategoriaDAO.php');
include_once('C:/xampp/htdocs/mds2013/model/Natureza.php');
include_once('C:/xampp/htdocs/mds2013/model/Categoria.php');
include_once('C:/xampp/htdocs/mds2013/controller/CrimeController.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/EErroConsulta.php');
include_once('C:/xampp/htdocs/mds2013/exceptions/EFalhaNaturezaController.php');

class NaturezaController{
	private $kindCrimeConnectionDatabase;
	
	public function __construct(){
		$kindCrimeInstance->kindCrimeConnectionDatabase = new NaturezaDAO();
	}
	public function __constructTeste(){
		$kindCrimeInstance->kindCrimeConnectionDatabase->__constructTeste();
	}
	public function _listarTodas(){
		$resultSearchKindCrime = $kindCrimeInstance->kindCrimeConnectionDatabase->listarTodas();
		
		return $resultSearchKindCrime;
	}
	public function _listarTodasAlfabicamente(){
		$resultSearchKindCrime = $kindCrimeInstance->kindCrimeConnectionDatabase->listarTodasAlfabicamente();
		return $resultSearchKindCrime;
	}
	public function _consultarPorId($idKindCrime){
		
		if(!is_numeric($idKindCrime)){
			throw new EErroConsulta();
		}
		$kindCrimeName = $kindCrimeInstance->kindCrimeConnectionDatabase->consultarPorId($idKindCrime);
		return $kindCrimeName;
	}
	public function _consultarPorNome($kindCrimeName){
		
		$kindCrimeName = $kindCrimeInstance->kindCrimeConnectionDatabase->consultarPorNome($kindCrimeName);
		return $kindCrimeName;
	}
	public function _consultarPorIdCategoria($idCategory){
		return $kindCrimeInstance->kindCrimeConnectionDatabase->consultarPorIdCategoria($idCategory);
	}
	public function _inserirNatureza(Natureza $kindCrimeName){
		return $kindCrimeInstance->kindCrimeConnectionDatabase->inserirNatureza($kindCrimeName);
	}
	public function _inserirArrayParse($arrayKindCrime){
		
		if(!is_array($arrayKindCrime)){
			throw new EFalhaNaturezaController();
		}
		for($i=0,$arrayKey = $arrayKindCrime,$beginCount = 0;$i<count($arrayKindCrime);$i++){
		//variable i: runs array kind of crime
                        $keyArrayKey = key($arrayKey);
			$categoryData = new CategoriaDAO();
			$categoryData = new Categoria();
			$categoryData = $categoryData->consultarPorNome($keyArrayKey);
                        
			for($j=$beginCount;$j<(count($arrayKindCrime[$keyArrayKey])+$beginCount);$j++){
                        //variable j: runs categories in each kind of crime
				$kindCrimeData = new Natureza();
				$kindCrimeData->__setNatureza($arrayKindCrime[$keyArrayKey][$j]);
				$kindCrimeData->__setIdCategoria($categoryData->__getIdCategoria());
				$kindCrimeInstance->kindCrimeConnectionDatabase->inserirNatureza($kindCrimeData);
			}
			$beginCount = $beginCount + count($arrayKindCrime[$keyArrayKey]);
			next($arrayKey);
		}
		return $categoryData;
	}
	public function _retornarDadosDeNaturezaFormatado($kindCrimeName){
		$timeConnectionDatabase = new TempoDAO();
		$objectCrimeController = new CrimeController();
		$arrayDataTime = $timeConnectionDatabase->listarTodos();
		$data;
                
		for($i=0; $i<count($arrayDataTime);$i++){
                //variable i : runs data time in array
                        $data['tempo'][$i] = $arrayDataTime[$i]->__getIntervalo();
			$data['crime'][$i]= $objectCrimeController->_somaDeCrimePorNaturezaEmAno($kindCrimeName, $data['tempo'][$i]);
			$data['title'][$i] = number_format($data['crime'][$i],0,',','.');
		}
		return $data;
	}
}