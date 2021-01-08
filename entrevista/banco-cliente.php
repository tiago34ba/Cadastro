<?php
require_once("conecta.php");

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado){
	$nome = mysqli_real_escape_string($conexao, $nome);
	$descricao = mysqli_real_escape_string($conexao, $descricao);
	$query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
	$resultadoDaInsercao = mysqli_query($conexao, $query);
	return $resultadoDaInsercao;

}

function buscaProduto($conexao, $id){
	$query = "select * from produtos where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao,"nome" => "", "email" => "", "rg","CPF","descricao"){
	 $nome = mysqli_real_escape_string($conexao, $nome);
	 $descricao = mysqli_real_escape_string($conexao, $descricao);
	 $query = "update cliente set nome = '{$nome}', email = {$email}, rg = '{$rg}', cpf = {$cpf}, descricao = {$descricao} where id = '{$id}'";
	 return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id){
	$query = "delete from Cliente where id = {$id}";
	return mysqli_query($conexao, $query);
}

function listaProdutos($conexao){
	$produtos = array();
	$resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from cliente as p join categorias as c on c.id=p.categoria_id");

	while($produto = mysqli_fetch_assoc($resultado)){ 
		array_push($cliente, $cliente);
	}
	return $produtos;
}

?>

