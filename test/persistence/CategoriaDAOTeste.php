<?php
	require_once('C:/xampp/htdocs/mds2013/persistence/CategoriaDAO.php');
	
	/**
	 * Classe CategoriaDAOTeste
	 **/
	class CategoriaDAOTeste extends PHPUnit_Framework_Testcase{
	
		public function testListarTodas()
		{
			$categoriaDAO = new CategoriaDAO();
			$this->assertNotEmpty($categoriaDAO->listarTodas());
		}
		
		public function testListarTodasAlfabeticamente()
		{
			$categoriaDAO = new CategoriaDAO();
			$this->assertNotEmpty($categoriaDAO->listarTodasAlfabeticamente());
			$this->assertNotNull($categoriaDAO->listarTodasAlfabeticamente());
		}
	
		public function testConsultarPorId(){
		
		}
		public function testConsultarPorNome(){
			
		}
		public function testeInserirCategoria(){
			
		}
	}
