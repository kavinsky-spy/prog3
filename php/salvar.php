<?php
//salvar.php
require_once("testaautenticacao.php");

if (count($_POST)>0){
	$dados = [];
	if (file_exists("banco.txt")){
		$dados = file_get_contents("banco.txt");
		$dados = unserialize($dados);
	}

	$linhaNova = [];
	$linhaNova[] = $_POST["nome"];
	$linhaNova[] = $_POST["email"];
	$linhaNova[] = $_POST["idade"];

	$salvo = false;
	if (isset($_POST["linha"])){
		if (!empty($_POST["linha"])){
			$posicao = $_POST["linha"] - 1;

			$dados[$posicao] = $linhaNova;
			$salvo = true;
		}
	}

	if (!$salvo){
		$dados[]=$linhaNova;
	}

	$dados = serialize($dados);
	file_put_contents("banco.txt", $dados);
}

echo "<a href='index.php'>Voltar para lista</a>";