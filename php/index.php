<?php

$arquivoExiste = file_exists("banco.txt");

echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Email</th><th>Idade</th><th>Ações</th></tr>";
if ($arquivoExiste){
	$dados = file_get_contents("banco.txt");
	$dados = unserialize($dados);
	$i = 1;
	foreach($dados as $linha){
		echo "<tr>";
		echo "<td>".$linha[0]."</td>";
		echo "<td>".$linha[1]."</td>";
		echo "<td>".$linha[2]."</td>";
		echo "<td><a href='remover.php?linha=".$i."'>x</a> | <a href='novo.php?linha=".$i."'>editar</a></td>";
		echo "</tr>";
		$i++;
	}
}
echo "</table>";
echo "<a href='novo.php'>Novo</a>";