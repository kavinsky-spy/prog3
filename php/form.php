<?php
require_once("form_text.php");
require_once("form_num.php");
require_once("form_hidden.php");
require_once("form_password.php");
require_once("form_submit.php");

function abreForm($action){
	echo "\n<form action='".$action."' method='post'>\n";
}

function fechaForm(){
	echo "\n</form>\n";
}