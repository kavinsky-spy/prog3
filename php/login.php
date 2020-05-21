<?php
//login.php
$erroAutenciacao = "";
if (count($_POST)>0){
	if(isset($_POST["usuario"]) && isset($_POST["senha"])){
		if ($_POST["usuario"] == "admin" &&  $_POST["senha"] == "senha"){
			//autentica
			session_start();
			$_SESSION["autenticado"] = true;
			session_write_close();
			header("location: index.php");
		} else {
			$erroAutenciacao = "Usuário e/ou senha inválidos.";
		}
	}
}

if ($erroAutenciacao != ""){
	echo "<h1 style='color: red'>".$erroAutenciacao."</h1>";
}

require_once("form.php");

abreForm("login.php");

campoText("usuario", "Usuário:");
echo "<br>";

campoPass("senha", "Senha:");
echo "<br>";

campoSubmit();

fechaForm();
