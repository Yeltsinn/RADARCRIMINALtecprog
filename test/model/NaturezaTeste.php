<?php
	require_once ('C:/xampp/htdocs/mds2013/model/Natureza.php');
	class NaturezaTeste extends PHPUnit_Framework_Testcase{
		
		public function testeIdNatureza(){
			$natureza = new Natureza();
			$this->assertInstanceOf('Natureza',$natureza);
			$this->assertObjectHasAttribute('idNatureza', $natureza);
			$natureza->__setIdNatureza(12);
			$this->assertEquals(12, $natureza->__getIdNatureza());
		}
		public function testExceptionSetIdNatureza(){
			$natureza = new Natureza();
			$this->assertInstanceOf('Natureza',$natureza);
			$this->assertObjectHasAttribute('idNatureza', $natureza);
			$this->setExpectedException('ETipoErrado');
			$natureza->__setIdNatureza("erro");
		}
		public function testeNatureza(){
			$natureza = new Natureza();
			$this->assertInstanceOf('Natureza',$natureza);
			$this->assertObjectHasAttribute('idNatureza', $natureza);
			$natureza->__setNatureza("teste");
			$this->assertEquals("teste", $natureza->__getNatureza());
		}
		public function testExceptionSetNatureza(){
			$natureza = new Natureza();
			$this->assertInstanceOf('Natureza',$natureza);
			$this->assertObjectHasAttribute('idNatureza', $natureza);
			$this->setExpectedException('ETipoErrado');
			$natureza->__setNatureza(10);
		}
		public function testExceptionSetIdCategoria(){
			$natureza = new Natureza();
			$this->assertInstanceOf('Natureza',$natureza);
			$this->assertObjectHasAttribute('idNatureza', $natureza);
			$this->setExpectedException('ETipoErrado');
			$natureza->__setIdCategoria("erro");
		}
		public function testeIdCategoria(){
			$natureza = new Natureza();
			$this->assertInstanceOf('Natureza',$natureza);
			$this->assertObjectHasAttribute('idNatureza', $natureza);
			$natureza->__setIdCategoria(10);
			$this->assertEquals(10, $natureza->__getIdCategoria());
		}
		public function testeConstructOverLoad(){
			$natureza = new Natureza();
			$this->assertInstanceOf('Natureza',$natureza);
			$this->assertObjectHasAttribute('idNatureza', $natureza);
			$natureza->__constructOverload(1, "natureza", 2);
			$this->assertEquals(1, $natureza->__getIdNatureza());
			$this->assertEquals("natureza", $natureza->__getNatureza());
			$this->assertEquals(2, $natureza->__getIdCategoria());
		}
		public function testExceptionConstructOverLoad(){
			$natureza = new Natureza();
			$this->assertInstanceOf('Natureza',$natureza);
			$this->assertObjectHasAttribute('idNatureza', $natureza);
			$this->setExpectedException('ETipoErrado');
			$natureza->__constructOverload("erro",10,"erro");
		}
	}
?>