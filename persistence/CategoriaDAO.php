<?php
include_once(__APP_PATH.'/model/Categoria.php');
include_once(__APP_PATH.'/persistence/Conexao.php');
include_once(__APP_PATH.'/exceptions/ECategoriaListarTodasVazio.php');

class CategoriaDAO{
	private $conexao;
	public function __construct(){
		$this->conexao = new Conexao();
	} 
	
	public function listarTodas(){
		$sql = "SELECT * FROM categoria";
		$resultado = $this->conexao->banco->Execute($sql);
		if(($resultado == null) || (empty($resultado) == true) || (count($resultado) == 0)){
			throw ECategoriaListarTodasVazio;
			
		}
		while($registro = $resultado->FetchNextObject())
		{
			$dadosCategoria = new Categoria();
			$dadosCategoria->__constructOverload($registro->ID_CATEGORIA,$registro->NOME_CATEGORIA);	
			$retornaCategorias[] = $dadosCategoria;
		}
		return $retornaCategorias;
	} 
	public function listarTodasAlfabicamente(){
		$sql = "SELECT * FROM categoria ORDER BY nome_categoria ASC ";
		$resultado = $this->conexao->banco->Execute($sql);
		if(($resultado == null) || (empty($resultado) == true) || (count($resultado) == 0)){
			throw ECategoriaListarTodasAlfabeticamenteVazio;
		}
		while($registro = $resultado->FetchNextObject())
		{
			$dadosCategoria = new Categoria();
			$dadosCategoria->__constructOverload($registro->ID_CATEGORIA,$registro->NOME_CATEGORIA);
			$retornaCategorias[] = $dadosCategoria;
		}
		return $retornaCategorias;
	}
	public function consultarPorId($id){
		$sql = "SELECT * FROM categoria WHERE id_categoria = $id";
		$resultado = $this->conexao->banco->Execute($sql);
		if(($resultado == null) || (empty($resultado) == true) || (count($resultado) == 0)){
			throw ECategoriaListarConsultaPorIdVazio;
		}
		$registro = $resultado->FetchNextObject();
		$dadosCategoria = new Categoria();
		$dadosCategoria->__constructOverload($registro->ID_CATEGORIA,$registro->NOME_CATEGORIA);
		return $dadosCategoria;
		
	}
	public function consultarPorNome($nomeCategoria){
		$sql = "SELECT * FROM categoria WHERE nome_categoria = '".$nomeCategoria."'";
		$resultado = $this->conexao->banco->Execute($sql);
		$registro = $resultado->FetchNextObject();
		if(($resultado == null) || (empty($resultado) == true) || (count($resultado) == 0)){
			throw ECategoriaConsultarPorNomeVazio;
		}
		$dadosCategoria = new Categoria();
		$dadosCategoria->__constructOverload($registro->ID_CATEGORIA,$registro->NOME_CATEGORIA);
		return $dadosCategoria;
	}
	public function inserirCategoria(Categoria $categoria){
		$sql = "INSERT INTO categoria (nome_categoria) values ('{$categoria->__getNomeCategoria()}')";
		$this->conexao->banco->Execute($sql);
		if(!$this->banco->Connect($this->servidor,$this->usuario,$this->senha,$this->db)){
				throw new EConexaoFalha();	
			}
	}
}