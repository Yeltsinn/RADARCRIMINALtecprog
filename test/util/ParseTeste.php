<?php
require_once "../../util/Parse.php";
class ParseTeste extends PHPUnit_Framework_Testcase{
	
	public function testConstructParse(){
		$planilha = "s�rie hist�rica - 2001 - 2012 2.xls";
		$this->assertFileExists('C:/xampp/htdocs/mds2013/files/'.$planilha);
	}
	public function testSetNatureza(){
		
	}
	
	
}