<?php
	session_start();
	include_once("visao/cabecalho.php");
	include_once("controle/ListarContato_class.php");
	
	$index = new ListarContato();

	include_once("visao/rodape.php");
?>

