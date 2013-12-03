<?php

 include ('C:/xampp/htdocs/mds2013/util/Parse.php'); 
 include_once('C:/xampp/htdocs/mds2013/persistence/CrimeDAO.php');
 include_once('C:/xampp/htdocs/mds2013/persistence/TempoDAO.php');
 include_once('C:/xampp/htdocs/mds2013/persistence/NaturezaDAO.php');
 include_once('C:/xampp/htdocs/mds2013/persistence/RegiaoAdministrativaDAO.php');
 include_once('C:/xampp/htdocs/mds2013/controller/RegiaoAdministrativaController.php');
 include_once('C:/xampp/htdocs/mds2013/controller/CrimeController.php');
 include_once('C:/xampp/htdocs/mds2013/controller/TempoController.php');
 include_once('C:/xampp/htdocs/mds2013/controller/NaturezaController.php');
 include_once('C:/xampp/htdocs/mds2013/controller/CategoriaController.php');
 include_once('C:/xampp/htdocs/mds2013/model/Crime.php');
 include_once('C:/xampp/htdocs/mds2013/model/Tempo.php');
 include_once('C:/xampp/htdocs/mds2013/model/Natureza.php');
 include_once('C:/xampp/htdocs/mds2013/model/RegiaoAdministrativa.php');
 $parse = new Parse("JAN_SET_2011_12  POR REGIAO ADM_2.xls");
 
 $categoriaCO = new CategoriaController();
 $categoriaCO->_inserirCategoriaArrayParseSerie($parse->__getCategoria());
 $naturezaCO = new NaturezaController();
 $naturezaCO->_inserirArrayParse($parse->__getNatureza());
 $tempoCO = new TempoController();
 $tempoCO->_inserirTempoArrayParse($parse->__getTempo());
 //$regiaoCO = new RegiaoAdministrativaController();
 //$regiaoCO->_inserirRegiaoArrayParseRA($parse->__getRegiao());
 $crimeCO = new CrimeController();
 $crimeCO->_inserirCrimeArrayParseSerieHistorica($parse->__getCrime());
 //$crimeCO->_inserirCrimeArrayParseRA($parse->__getCrime());
 
 
 
/**
  function _inserirCrimeArrayParseRA($arrayCrime){
 	for($i=0,$arrayKey = $arrayCrime,$inicio = 0;$i<count($arrayCrime);$i++){
 		$natureza = key($arrayKey);

 		$dadosNatureza = new Natureza();
 		$naturezaDAO = new NaturezaDAO();
 		$dadosNatureza = $naturezaDAO->consultarPorNome($natureza);
 		$arrayRegiao = $arrayCrime[$natureza];
 		for($j=0;$j<count(array_keys($arrayCrime[$natureza]));$j++){
 			$regiao = key($arrayRegiao);
 			$dadosRegiao = new RegiaoAdministrativa();
 			$regiaoDAO = new RegiaoAdministrativaDAO();
 			$dadosRegiao = $regiaoDAO->consultarPorNome($regiao);
 			$arrayTempo = $arrayCrime[$natureza][$regiao];
 			for($x = 0;$x<count(array_keys($arrayCrime[$natureza][$regiao])); $x++){
 				$tempo = key($arrayTempo);
 				$dadosTempo = new Tempo();
 				$tempoDAO = new TempoDAO();
 				$dadosTempo = $tempoDAO->consultarPorIntervalo($tempo);
 				$dadosCrime = new Crime();
 				$dadosCrime->__setIdNatureza($dadosNatureza->__getIdNatureza());
 				$dadosCrime->__setIdRegiaoAdministrativa($dadosRegiao->__getIdRegiaoAdministrativa());
 				$dadosCrime->__setIdTempo($dadosTempo->__getIdTempo());
 				$dadosCrime->__setQuantidade($arrayCrime[$natureza][$regiao][$tempo]);
 				print_r($dadosCrime);
 				next($arrayTempo);
 			}
 
 			next($arrayRegiao);
 		}
 		next($arrayKey);
 	}
 }
 	_inserirCrimeArrayParseRA($parse->__getCrime());
 **/	
?>