<?php
session_start();
if (
	!isset($_SESSION["autenticado"])
	|| $_SESSION["autenticado"] !== true
	){
	header("location: login.php");
}