<?php
	require_once ($_SERVER['DOCUMENT_ROOT'].'/mds2013/persistence/NaturezaDAO.php');
	//include_once(__APP_PATH.'../../persistence/NaturezaDAO.php');
	/**
	 * Classe Categoria Teste
	 **/
	class NaturezaDAOTeste extends PHPUnit_Framework_Testcase{
	
		public function testListarTodas(){
			$naturezaDAO = new NaturezaDAO();
			$this->assertNotEmpty($naturezaDAO->listarTodas());
			
		}
	
	}

?>