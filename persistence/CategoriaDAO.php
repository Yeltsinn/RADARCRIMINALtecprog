<?php
include_once('../model/Categoria.php');
class CategoriaDAO{
	private $conexao;
	public function __construct(){
		$this->conexao = new Conexao();
	} 
	
	public function listarTodas(){
		$sql = "SELECT * FROM categoria";
		$resultado = $this->conexao->Execute($sql);
		while($registro = $resultado->FetchNextObject())
		{
			$dadosCategoria = new Categoria();
			$dadosCategoria->__setIdCategoria($registro->ID_CATEGORIA);
			$dadosCategoria->__setNomeCategoria($registro->NOME_CATEGORIA);
			
			$retornaCategorias[] = $dadosCategoria;
		}
		return $retornaCategorias;
	} 
	public function listarTodasAlfabicamente(){
		$sql = "SELECT * FROM categoria ORDER BY nome_categoria ASC ";
		$resultado = $this->conexao->Execute($sql);
		while($registro = $resultado->FetchNextObject())
		{
			$dadosCategoria = new Categoria();
			$dadosCategoria->__setIdCategoria($registro->ID_CATEGORIA);
			$dadosCategoria->__setNomeCategoria($registro->NOME_CATEGORIA);
				
			$retornaCategorias[] = $dadosCategoria;
		}
		return $retornaCategorias;
	}
	public function consultarPorId($id){
		$sql = "SELECT * FROM categoria WHERE id_categoria = $id";
		$resultado = $this->conexao->Execute($sql);
		while($registro = $resultado->FetchNextObject())
		{
			$dadosCategoria = new Categoria();
			$dadosCategoria->__setIdCategoria($registro->ID_CATEGORIA);
			$dadosCategoria->__setNomeCategoria($registro->NOME_CATEGORIA);
		
			$retornaCategorias[] = $dadosCategoria;
		}
		return $retornaCategorias;
		
	}
	public function consultarPorNome($nomeCategoria){
		$sql = "SELECT * FROM categoria WHERE nome_categoria = $nomeCategoria";
		$resultado = $this->conexao->Execute($sql);
		while($registro = $resultado->FetchNextObject())
		{
			$dadosCategoria = new Categoria();
			$dadosCategoria->__setIdCategoria($registro->ID_CATEGORIA);
			$dadosCategoria->__setNomeCategoria($registro->NOME_CATEGORIA);
		
			$retornaCategorias[] = $dadosCategoria;
		}
		return $retornaCategorias;
	}
	public function inserirCategoria($arrayCategoria){
		$dadosCategoria = new Categoria();
		for($i=0; $i<count(arrayCategoria);$i++){
			$dadosCategoria->__setNomeCategoria($arrayCategoria[$i]);
			$sql = "INSERT INTO nome_categoria values ('{$dadosCategoria->__getNomeCategoria()}')";
			$this->conexao->Execute($sql);
		}
	}
}