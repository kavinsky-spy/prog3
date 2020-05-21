<?php
//novo.php
require_once("testaautenticacao.php");

$editando = ["", "", ""];
$posicao = "";
if (isset($_GET["linha"])){
	if (!empty($_GET["linha"])){
		//edicao
		if (file_exists("banco.txt")){
			$dados = file_get_contents("banco.txt");
			$dados = unserialize($dados);
			
			$posicao = (int)$_GET["linha"];
			$posicao = $posicao - 1;
			
			if ($editando = array_splice($dados, $posicao, 1)){
				//edicao
				$editando = $editando[0];
			} else {
				die("Linha não encontrada.");
			}
		}
	}
}

require_once("form.php");

abreForm("salvar.php");

if ($posicao != ""){
	campoHidden("linha", $posicao+1);
}

campoText("nome", "Nome:", $editando[0]);
echo "<br>";

campoText("email", "E-mail:", $editando[1]);
echo "<br>";

campoNum("idade", "Idade: ", $editando[2]);
echo "<br>";

campoSubmit();
fechaForm();