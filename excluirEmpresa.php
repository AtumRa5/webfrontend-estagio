<?php
		include_once("empresas.php");
		$idempresa = $_GET["idEm"];
	
		excluiPessoa($idempresa);	
	
		header("location:empresas.php");
 ?>