<?php
//remover.php
require_once("testaautenticacao.php");
if (isset($_GET["linha"])){
	if (file_exists("banco.txt")){
		$dados = file_get_contents("banco.txt");
		$dados = unserialize($dados);

		
		$posicao = (int)$_GET["linha"];
		$posicao = $posicao - 1;
		
		$removido = array_splice($dados, $posicao, 1);

		$dados = serialize($dados);
		file_put_contents("banco.txt", $dados);
	}
}

echo "<a href='index.php'>Voltar para lista</a>";